

<?php $__env->startSection('content'); ?>
    <?php if(config('frontend.maintenance') == 'on'): ?>			
        <div class="container h-100vh">
            <div class="row text-center h-100vh align-items-center">
                <div class="col-md-12">
                    <img src="<?php echo e(URL::asset('img/files/maintenance.png')); ?>" alt="Maintenance Image">
                    <h2 class="mt-4 font-weight-bold"><?php echo e(__('We are just tuning up a few things')); ?>.</h2>
                    <h5><?php echo e(__('We apologize for the inconvenience but')); ?> <span class="font-weight-bold text-info"><?php echo e(config('app.name')); ?></span> <?php echo e(__('is currenlty undergoing planned maintenance')); ?>.</h5>
                </div>
            </div>
        </div>
    <?php else: ?>
        <?php if(config('settings.registration') == 'enabled'): ?>
            <div class="container-fluid h-100vh ">                
                <div class="row login-background justify-content-center">

                    <div class="col-sm-12" id="login-responsive"> 
                        <div class="row justify-content-center subscribe-registration-background">
                            <div class="col-lg-8 col-md-12 col-sm-12 mx-auto">
                                <div class="card-body pt-8">

                                    <a class="navbar-brand register-logo" href="<?php echo e(url('/')); ?>"><img id="brand-img"  src="<?php echo e(URL::asset('img/brand/logo.png')); ?>" alt=""></a>
                                    
                                    <div class="registration-nav mb-8 mt-8">
                                        <div class="registration-nav-inner">					
                                            <div class="row text-center justify-content-center">
                                                <div class="col-lg-3 col-sm-12">
                                                    <div class="d-flex wizard-nav-text">
                                                        <div class="wizard-step-number current-step mr-3 fs-14" id="step-one-number"><i class="fa-solid fa-check"></i></div>
                                                        <div class="wizard-step-title"><span class="font-weight-bold fs-14"><?php echo e(__('Create Account')); ?></span> <br> <span class="text-muted wizard-step-title-number fs-11 float-left"><?php echo e(__('STEP 1')); ?></span></div>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-chevrons-right wizard-nav-chevron current-sign" id="step-one-icon"></i>
                                                    </div>									
                                                </div>	
                                                <div class="col-lg-3 col-sm-12">
                                                    <div class="d-flex wizard-nav-text">
                                                        <div class="wizard-step-number mr-3 fs-14 current-step" id="step-two-number">2</div>
                                                        <div class="wizard-step-title responsive"><span class="font-weight-bold fs-14"><?php echo e(__('Select Your Plan')); ?></span> <br> <span class="text-muted wizard-step-title-number fs-11 float-left"><?php echo e(__('STEP 2')); ?></span></div>
                                                    </div>	
                                                    <div>
                                                        <i class="fa-solid fa-chevrons-right wizard-nav-chevron" id="step-two-icon"></i>
                                                    </div>								
                                                </div>
                                                <div class="col-lg-3 col-sm-12">
                                                    <div class="d-flex wizard-nav-text">
                                                        <div class="wizard-step-number mr-3 fs-14" id="step-three-number">3</div>
                                                        <div class="wizard-step-title"><span class="font-weight-bold fs-14"><?php echo e(__('Payment')); ?></span> <br> <span class="text-muted wizard-step-title-number fs-11 float-left"><?php echo e(__('STEP 3')); ?></span></div>
                                                    </div>								
                                                </div>
                                            </div>					
                                        </div>
                                    </div>                         

                                    <div id="registration-prices" class="subscribe-second-step">

                                        <h3 class="text-center login-title mb-2"><?php echo e(__('Select Your Plan')); ?> </h3>
                                        <p class="fs-12 text-muted text-center mb-8"><?php echo e(__('Choose your subscription plan and click continue')); ?></p>

                                        <?php if($monthly || $yearly || $lifetime): ?>
                            
                                            <div class="tab-menu-heading text-center">
                                                <div class="tabs-menu">								
                                                    <ul class="nav">							
                                                        <?php if($monthly): ?>
                                                            <li><a href="#monthly_plans" class="<?php if(($monthly && $yearly) || ($monthly && !$yearly) || ($monthly && !$yearly) || ($monthly && $yearly)): ?> active <?php else: ?> '' <?php endif; ?>" data-bs-toggle="tab"> <?php echo e(__('Monthly Plans')); ?></a></li>
                                                        <?php endif; ?>	
                                                        <?php if($yearly): ?>
                                                            <li><a href="#yearly_plans" class="<?php if(!$monthly && $yearly): ?> active <?php else: ?> '' <?php endif; ?>" data-bs-toggle="tab"> <?php echo e(__('Yearly Plans')); ?></a></li>
                                                        <?php endif; ?>		
                                                        <?php if($lifetime): ?>
                                                            <li><a href="#lifetime" class="<?php if(!$monthly && !$yearly &&  $lifetime): ?> active <?php else: ?> '' <?php endif; ?>" data-bs-toggle="tab"> <?php echo e(__('Lifetime Plans')); ?></a></li>
                                                        <?php endif; ?>							
                                                    </ul>
                                                </div>
                                            </div>
                            
                                        
                            
                                            <div class="tabs-menu-body">
                                                <div class="tab-content">                            
                            
                                                    <?php if($monthly): ?>	
                                                        <div class="tab-pane <?php if(($monthly) || ($monthly && !$lifetime) || ($monthly && !$yearly)): ?> active <?php else: ?> '' <?php endif; ?>" id="monthly_plans">
                            
                                                            <?php if($monthly_subscriptions->count()): ?>		
                            
                                                                <div class="row justify-content-md-center">
                            
                                                                    <?php $__currentLoopData = $monthly_subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>																			
                                                                        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                            <div class="pt-2 h-100 prices-responsive">
                                                                                <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card <?php if($subscription->featured): ?> price-card-border <?php endif; ?>">
                                                                                    <?php if($subscription->featured): ?>
                                                                                        <span class="plan-featured"><?php echo e(__('Most Popular')); ?></span>
                                                                                    <?php endif; ?>
                                                                                    <div class="plan">			
                                                                                        <div class="plan-title"><?php echo e($subscription->plan_name); ?></div>	
                                                                                        <p class="plan-cost mb-5">																					
                                                                                            <?php if($subscription->free): ?>
                                                                                                <?php echo e(__('Free')); ?>

                                                                                            <?php else: ?>
                                                                                                <?php echo config('payment.default_system_currency_symbol'); ?><?php if(config('payment.decimal_points') == 'allow'): ?><?php echo e(number_format((float)$subscription->price, 2)); ?> <?php else: ?><?php echo e(number_format($subscription->price)); ?> <?php endif; ?><span class="fs-12 text-muted"><span class="mr-1">/</span> <?php echo e(__('per month')); ?></span>
                                                                                            <?php endif; ?>   
                                                                                        </p>                                                                         
                                                                                        <div class="text-center action-button mt-2 mb-5">
                                                                                            <a href="<?php echo e(route('register.subscriber.payment', ['id' => $subscription->id])); ?>" class="btn btn-primary-pricing"><?php echo e(__('Select')); ?></a>                                               														
                                                                                        </div>
                                                                                        <p class="fs-12 mb-3 text-muted"><?php echo e(__('Included Features')); ?></p>																		
                                                                                        <ul class="fs-12 pl-3">		
                                                                                            <?php if($subscription->words == -1): ?>
                                                                                                <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('words / month')); ?></span></li>
                                                                                            <?php else: ?>	
                                                                                                <?php if($subscription->words != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->words); ?></span> <span class="plan-feature-text"><?php echo e(__('words / month')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.image_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->images == -1): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('images / month')); ?></span></li>
                                                                                                <?php else: ?>
                                                                                                    <?php if($subscription->images != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->images); ?></span> <span class="plan-feature-text"><?php echo e(__('images / month')); ?></span></li> <?php endif; ?>
                                                                                                <?php endif; ?>																	
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.whisper_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->minutes == -1): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('minutes / month')); ?></span></li>
                                                                                                <?php else: ?>
                                                                                                    <?php if($subscription->minutes != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->minutes); ?></span> <span class="plan-feature-text"><?php echo e(__('minutes / month')); ?></span></li> <?php endif; ?>
                                                                                                <?php endif; ?>																	
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.voiceover_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->characters == -1): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('characters / month')); ?></span></li>
                                                                                                <?php else: ?>
                                                                                                    <?php if($subscription->characters != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->characters); ?></span> <span class="plan-feature-text"><?php echo e(__('characters / month')); ?></span></li> <?php endif; ?>
                                                                                                <?php endif; ?>																	
                                                                                            <?php endif; ?>
                                                                                                <?php if($subscription->team_members != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->team_members); ?></span> <span class="plan-feature-text"><?php echo e(__('team members')); ?></span></li> <?php endif; ?>
                                                                                            
                                                                                            <?php if(config('settings.chat_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->chat_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Chats Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.image_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->image_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Images Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.voiceover_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->voiceover_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Voiceover Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.whisper_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->transcribe_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Speech to Text Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.code_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->code_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Code Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if($subscription->team_members): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('Team Members Option')); ?></span></li> <?php endif; ?>
                                                                                            <?php $__currentLoopData = (explode(',', $subscription->plan_features)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <?php if($feature): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e($feature); ?></li>
                                                                                                <?php endif; ?>																
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>															
                                                                                        </ul>																
                                                                                    </div>					
                                                                                </div>	
                                                                            </div>							
                                                                        </div>										
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                                                                </div>	
                                                            
                                                            <?php else: ?>
                                                                <div class="row text-center">
                                                                    <div class="col-sm-12 mt-6 mb-6">
                                                                        <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No Subscriptions plans were set yet')); ?></h6>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>					
                                                        </div>	
                                                    <?php endif; ?>	
                                                    
                                                    <?php if($yearly): ?>	
                                                        <div class="tab-pane <?php if(($yearly) && ($yearly && !$lifetime) && ($yearly && !$monthly)): ?> active <?php else: ?> '' <?php endif; ?>" id="yearly_plans">
                            
                                                            <?php if($yearly_subscriptions->count()): ?>		
                            
                                                                <div class="row justify-content-md-center">
                            
                                                                    <?php $__currentLoopData = $yearly_subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>																			
                                                                        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                            <div class="pt-2 h-100 prices-responsive">
                                                                                <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card <?php if($subscription->featured): ?> price-card-border <?php endif; ?>">
                                                                                    <?php if($subscription->featured): ?>
                                                                                        <span class="plan-featured"><?php echo e(__('Most Popular')); ?></span>
                                                                                    <?php endif; ?>
                                                                                    <div class="plan">			
                                                                                        <div class="plan-title"><?php echo e($subscription->plan_name); ?></div>																						
                                                                                        <p class="plan-cost mb-5">
                                                                                            <?php if($subscription->free): ?>
                                                                                                <?php echo e(__('Free')); ?>

                                                                                            <?php else: ?>
                                                                                                <?php echo config('payment.default_system_currency_symbol'); ?><?php if(config('payment.decimal_points') == 'allow'): ?><?php echo e(number_format((float)$subscription->price, 2)); ?> <?php else: ?><?php echo e(number_format($subscription->price)); ?> <?php endif; ?><span class="fs-12 text-muted"><span class="mr-1">/</span> <?php echo e(__('per year')); ?></span>
                                                                                            <?php endif; ?>    
                                                                                        </p>                                                                            
                                                                                        <div class="text-center action-button mt-2 mb-5">
                                                                                            <a href="<?php echo e(route('register.subscriber.payment', ['id' => $subscription->id])); ?>" class="btn btn-primary-pricing"><?php echo e(__('Select')); ?></a>                                               														
                                                                                        </div>
                                                                                        <p class="fs-12 mb-3 text-muted"><?php echo e(__('Included Features')); ?></p>																	
                                                                                        <ul class="fs-12 pl-3">		
                                                                                            <?php if($subscription->words == -1): ?>
                                                                                                <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('words / month')); ?></span></li>
                                                                                            <?php else: ?>	
                                                                                                <?php if($subscription->words != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->words); ?></span> <span class="plan-feature-text"><?php echo e(__('words / month')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.image_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->images == -1): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('images / month')); ?></span></li>
                                                                                                <?php else: ?>
                                                                                                    <?php if($subscription->images != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->images); ?></span> <span class="plan-feature-text"><?php echo e(__('images / month')); ?></span></li> <?php endif; ?>
                                                                                                <?php endif; ?>																	
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.whisper_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->minutes == -1): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('minutes / month')); ?></span></li>
                                                                                                <?php else: ?>
                                                                                                    <?php if($subscription->minutes != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->minutes); ?></span> <span class="plan-feature-text"><?php echo e(__('minutes / month')); ?></span></li> <?php endif; ?>
                                                                                                <?php endif; ?>																	
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.voiceover_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->characters == -1): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('characters / month')); ?></span></li>
                                                                                                <?php else: ?>
                                                                                                    <?php if($subscription->characters != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->characters); ?></span> <span class="plan-feature-text"><?php echo e(__('characters / month')); ?></span></li> <?php endif; ?>
                                                                                                <?php endif; ?>																	
                                                                                            <?php endif; ?>
                                                                                                <?php if($subscription->team_members != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->team_members); ?></span> <span class="plan-feature-text"><?php echo e(__('team members')); ?></span></li> <?php endif; ?>
                                                                                            
                                                                                            <?php if(config('settings.chat_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->chat_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Chats Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.image_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->image_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Images Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.voiceover_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->voiceover_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Voiceover Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.whisper_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->transcribe_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Speech to Text Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.code_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->code_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Code Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if($subscription->team_members): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('Team Members Option')); ?></span></li> <?php endif; ?>
                                                                                            <?php $__currentLoopData = (explode(',', $subscription->plan_features)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <?php if($feature): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e($feature); ?></li>
                                                                                                <?php endif; ?>																
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>															
                                                                                        </ul>																
                                                                                    </div>					
                                                                                </div>	
                                                                            </div>							
                                                                        </div>											
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                                                                </div>	
                                                            
                                                            <?php else: ?>
                                                                <div class="row text-center">
                                                                    <div class="col-sm-12 mt-6 mb-6">
                                                                        <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No Subscriptions plans were set yet')); ?></h6>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>					
                                                        </div>
                                                    <?php endif; ?>	
                                                    
                                                    <?php if($lifetime): ?>
                                                        <div class="tab-pane <?php if((!$monthly && $lifetime) && (!$yearly && $lifetime)): ?> active <?php else: ?> '' <?php endif; ?>" id="lifetime">
            
                                                            <?php if($lifetime_subscriptions->count()): ?>                                                    
                                                                
                                                                <div class="row justify-content-md-center">
                                                                
                                                                    <?php $__currentLoopData = $lifetime_subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>																			
                                                                        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                            <div class="pt-2 h-100 prices-responsive">
                                                                                <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card <?php if($subscription->featured): ?> price-card-border <?php endif; ?>">
                                                                                    <?php if($subscription->featured): ?>
                                                                                        <span class="plan-featured"><?php echo e(__('Most Popular')); ?></span>
                                                                                    <?php endif; ?>
                                                                                    <div class="plan">			
                                                                                        <div class="plan-title"><?php echo e($subscription->plan_name); ?></div>
                                                                                        <p class="plan-cost mb-5">
                                                                                            <?php if($subscription->free): ?>
                                                                                                <?php echo e(__('Free')); ?>

                                                                                            <?php else: ?>
                                                                                                <?php echo config('payment.default_system_currecy_symbol'); ?><?php if(config('payment.decimal_points') == 'allow'): ?><?php echo e(number_format((float)$subscription->price, 2)); ?> <?php else: ?><?php echo e(number_format($subscription->price)); ?> <?php endif; ?><span class="fs-12 text-muted"><span class="mr-1">/</span> <?php echo e(__('for lifetime')); ?></span>
                                                                                            <?php endif; ?>	
                                                                                        </p>																				
                                                                                        <div class="text-center action-button mt-2 mb-5">
                                                                                            <a href="<?php echo e(route('register.subscriber.payment', ['id' => $subscription->id])); ?>" class="btn btn-primary-pricing"><?php echo e(__('Select')); ?></a>                                               														
                                                                                        </div>
                                                                                        <p class="fs-12 mb-3 text-muted"><?php echo e(__('Included Features')); ?></p>																	
                                                                                        <ul class="fs-12 pl-3">		
                                                                                            <?php if($subscription->words == -1): ?>
                                                                                                <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('words / month')); ?></span></li>
                                                                                            <?php else: ?>	
                                                                                                <?php if($subscription->words != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->words); ?></span> <span class="plan-feature-text"><?php echo e(__('words / month')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.image_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->images == -1): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('images / month')); ?></span></li>
                                                                                                <?php else: ?>
                                                                                                    <?php if($subscription->images != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->images); ?></span> <span class="plan-feature-text"><?php echo e(__('images / month')); ?></span></li> <?php endif; ?>
                                                                                                <?php endif; ?>																	
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.whisper_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->minutes == -1): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('minutes / month')); ?></span></li>
                                                                                                <?php else: ?>
                                                                                                    <?php if($subscription->minutes != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->minutes); ?></span> <span class="plan-feature-text"><?php echo e(__('minutes / month')); ?></span></li> <?php endif; ?>
                                                                                                <?php endif; ?>																	
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.voiceover_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->characters == -1): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e(__('Unlimited')); ?></span> <span class="plan-feature-text"><?php echo e(__('characters / month')); ?></span></li>
                                                                                                <?php else: ?>
                                                                                                    <?php if($subscription->characters != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->characters); ?></span> <span class="plan-feature-text"><?php echo e(__('characters / month')); ?></span></li> <?php endif; ?>
                                                                                                <?php endif; ?>																	
                                                                                            <?php endif; ?>
                                                                                                <?php if($subscription->team_members != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->team_members); ?></span> <span class="plan-feature-text"><?php echo e(__('team members')); ?></span></li> <?php endif; ?>
                                                                                            
                                                                                            <?php if(config('settings.chat_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->chat_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Chats Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.image_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->image_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Images Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.voiceover_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->voiceover_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Voiceover Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.whisper_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->transcribe_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Speech to Text Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if(config('settings.code_feature_user') == 'allow'): ?>
                                                                                                <?php if($subscription->code_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Code Feature')); ?></span></li> <?php endif; ?>
                                                                                            <?php endif; ?>
                                                                                            <?php if($subscription->team_members): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('Team Members Option')); ?></span></li> <?php endif; ?>
                                                                                            <?php $__currentLoopData = (explode(',', $subscription->plan_features)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <?php if($feature): ?>
                                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e($feature); ?></li>
                                                                                                <?php endif; ?>																
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>															
                                                                                        </ul>																
                                                                                    </div>					
                                                                                </div>	
                                                                            </div>							
                                                                        </div>											
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>					
            
                                                                </div>
            
                                                            <?php else: ?>
                                                                <div class="row text-center">
                                                                    <div class="col-sm-12 mt-6 mb-6">
                                                                        <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No lifetime plans were set yet')); ?></h6>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
            
                                                        </div>	
                                                    <?php endif; ?>	
                                                </div>
                                            </div>
                                        
                                        <?php else: ?>
                                            <div class="row text-center">
                                                <div class="col-sm-12 mt-6 mb-6">
                                                    <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No Subscription plans were set yet')); ?></h6>
                                                </div>
                                            </div>
                                        <?php endif; ?>
            
                                        <div class="text-center">
                                            <p class="mb-0 mt-2"><i class="fa-solid fa-shield-check text-success mr-2"></i><span class="text-muted fs-12"><?php echo e(__('PCI DSS Compliant')); ?></span></p>
                                        </div> 

                                        <div class="text-center">
                                            <a class="fs-12 font-weight-bold special-action-sign" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Sign Out')); ?></a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                                <?php echo csrf_field(); ?>
                                            </form>     
                                        </div>   
                                
                                    </div>

                                </div> 
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <h5 class="text-center pt-9"><?php echo e(__('New user registration is disabled currently')); ?></h5>
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\vijay\project\xampp\htdocs\chatboat_menia\resources\views/auth/subscribe-two.blade.php ENDPATH**/ ?>