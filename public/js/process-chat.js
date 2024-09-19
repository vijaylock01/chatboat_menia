function process(message) {
    msgerSendBtn.disabled = true;
    let google = '';
    if ($('#google-search').is(':checked')) {
        google = 'on';
    } else {
        google = '';
    }
    let model = document.querySelector('input[name="model"]:checked').value;
    let company = document.getElementById("company").value;
    let service = document.getElementById("service").value;

    let formData = new FormData();
    formData.append('message', message);
    formData.append('chat_code', chat_code);
    formData.append('conversation_id', active_id);
    formData.append('image', uploaded_image);
    formData.append('google_search', google); 
    formData.append('model', model);
    formData.append('company', company);
    formData.append('service', service);
    let code = makeid(10);
    appendMessage(bot_avatar, "left", "", code);
    let $msg_txt = $("#" + code);
    let $div = $("#chat-bubble-" + code);
    let newChatId = 0;
    fetch(base_url_public+'user/chat/process', {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST', 
            body: formData
        })		
        .then(response => response.json())
        .then(function(result){

            // if (result['old'] && result['current']) {
            // 	animateValue("balance-number", result['old'], result['current'], 300);
            // }
    
            if (result['status'] == 'error') {
                Swal.fire('warning', result['message'], 'warning');
                clearConversationInvalid();
            }
            else {
                newChatId =  result['chat_id'];
            }
        })	
        .then(data => {
            eventSource = new EventSource(base_url_public+"user/chat/generate?conversation_id=" + active_id+"&chat_id="+newChatId);				
            const response = document.getElementById(code);
            const chatbubble = document.getElementById('chat-bubble-' + code);
            let msg = '';
            let i = 0;

            eventSource.onopen = function(e) {
                response.innerHTML = '';					
            };

            eventSource.onmessage = function (e) {
                debugger;
                if (e.data == "[DONE]") {
                    msgerSendBtn.disabled = false
                    eventSource.close();
                    $msg_txt.html(escape_html(msg));
                    $div.data('message', msg);						
                    hljs.highlightAll();						
                    uploaded_image = '';

                } else {
                    let txt;
                    if (uploaded_image == '') {
                        try {
                            const parsedData = JSON.parse(e.data);
                            if (parsedData.choices && parsedData.choices[0].delta && parsedData.choices[0].delta.content !== undefined) {
                                txt = parsedData.choices[0].delta.content;
                            } else {
                                throw new Error('choices[0].delta.content is undefined');
                            }
                        } catch (error) {
                            if (model == 'claude-3-haiku-20240307' || model == 'claude-3-sonnet-20240229' || model == 'claude-3-opus-20240229' || model == 'gemini_pro') {
                                txt = e.data;
                            } else {
                                txt = e.data;
                            }
                        }
                        
                    } else {
                        txt = e.data
                    }

                    if (txt !== undefined) {
                        msg = msg + txt;

                        let str = msg;
                        if (model != 'gemini_pro') {
                            if(str.indexOf('<') === -1){
                                str = escape_html(msg)
                            } else {
                                str = str.replace(/[&<>"'`{}()\[\]]/g, (match) => {
                                    switch (match) {
                                        case '<':
                                            return '&lt;';
                                        case '>':
                                            return '&gt;';
                                        case '{':
                                            return '&#123;';
                                        case '}':
                                            return '&#125;';
                                        case '(':
                                            return '&#40;';
                                        case ')':
                                            return '&#41;';
                                        case '[':
                                            return '&#91;';
                                        case ']':
                                            return '&#93;';
                                        default:
                                            return match;
                                    }
                                });
                                str = str.replace(/(?:\r\n|\r|\n)/g, '<br>');
                            }	
                        }
                        

                        $msg_txt.html(str);
                        if (model != 'gemini_pro') {
                            //hljs.highlightAll();
                        }
                        

                        //response.innerHTML += txt.replace(/(?:\r\n|\r|\n)/g, '<br>');
                    }
                    msgerChat.scrollTop += 100;
                }
            };
            eventSource.onerror = function (e) {
                msgerSendBtn.disabled = false
                console.log(e);
                eventSource.close();
            };
            
        })
        .catch(function (error) {
            console.log(error);
            msgerSendBtn.disabled = false;
            eventSource.close();
        });

}