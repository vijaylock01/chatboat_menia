<?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(trim($model) == 'gpt-3.5-turbo-0125'): ?>
        <div class="col-md-4 col-sm-12">
            <input type="radio" id="control_01" name="model" onclick="handleClick(this);" value="gpt-3.5-turbo-0125" <?php if($default_model == 'gpt-3.5-turbo-0125'): ?> checked <?php endif; ?> <?php if((auth()->user()->gpt_3_turbo_credits + auth()->user()->gpt_3_turbo_credits_prepaid) == 0): ?> disabled <?php endif; ?>>
            <label for="control_01">
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="mr-1 h-4 w-4 align-text-top"><g clip-path="url(#OpenAI_svg__a)"><path fill="currentColor" fill-rule="evenodd" d="M7.385.007a4.156 4.156 0 0 0-2.978 1.568c-.24.304-.463.699-.594 1.055l-.058.156-.219.056A4.031 4.031 0 0 0 .72 5.452a3.94 3.94 0 0 0 .23 3.13c.14.271.315.535.483.729l.12.139-.039.131a3.696 3.696 0 0 0-.159 1.133c0 .657.132 1.214.423 1.788a4.087 4.087 0 0 0 2.817 2.154c.49.1 1.106.116 1.516.039l.177-.033.214.201a4 4 0 0 0 1.561.935c.521.17.985.228 1.528.191 1.337-.092 2.469-.739 3.194-1.825.157-.236.244-.402.374-.718l.103-.249.111-.027a4.308 4.308 0 0 0 1.804-.94 4.082 4.082 0 0 0 1.24-2.16 3.994 3.994 0 0 0-.75-3.26c-.078-.1-.156-.2-.174-.225-.03-.042-.029-.06.03-.29.097-.378.128-.623.128-1.017 0-1.036-.386-1.985-1.132-2.78-.591-.63-1.53-1.096-2.445-1.214a5.048 5.048 0 0 0-1.183.022l-.179.034-.197-.19A4.116 4.116 0 0 0 8.645.125a4.586 4.586 0 0 0-1.26-.117Zm.872 1.098c.235.05.547.159.752.26.176.086.52.304.566.358.016.02-.373.25-1.648.975-.918.522-1.705.98-1.748 1.02a.593.593 0 0 0-.122.16c-.042.089-.043.109-.053 2.394l-.01 2.304-.64-.363c-.353-.2-.666-.379-.696-.398l-.055-.035V5.833c0-1.222.008-2.01.021-2.116a3.08 3.08 0 0 1 .588-1.466 3.82 3.82 0 0 1 .664-.642c.353-.247.856-.456 1.234-.513.09-.013.177-.027.193-.031.088-.021.815.01.954.04Zm3.819 1.232c1.554.275 2.64 1.657 2.514 3.198a2.432 2.432 0 0 1-.03.265c-.005.009-.615-.332-1.354-.756-2.133-1.222-2.065-1.185-2.171-1.2a.593.593 0 0 0-.185.01c-.051.013-.938.505-2.067 1.147a142.354 142.354 0 0 1-2.012 1.134c-.034.008-.036-.036-.036-.771 0-.718.003-.782.035-.81.068-.057 3.305-1.885 3.507-1.98.236-.11.552-.207.812-.246.285-.044.712-.04.986.01ZM3.63 7.971a.558.558 0 0 0 .133.16c.044.033.96.56 2.034 1.17a115.76 115.76 0 0 1 1.953 1.122c0 .027-1.333.77-1.38.77-.045 0-3.031-1.683-3.421-1.928a3.04 3.04 0 0 1-1.333-1.937 3.356 3.356 0 0 1 0-1.165c.095-.422.223-.728.439-1.045.36-.53.832-.905 1.452-1.154l.05-.02.011 1.963.01 1.965.052.099Zm8.7-2.226c1.896 1.08 1.735.985 1.947 1.146a2.955 2.955 0 0 1 1.169 2.35c0 .513-.097.927-.328 1.383a3.15 3.15 0 0 1-1.05 1.149c-.134.084-.54.29-.577.29-.008 0-.018-.875-.02-1.946l-.006-1.946-.047-.092a.654.654 0 0 0-.111-.153c-.036-.034-.952-.568-2.035-1.187-1.083-.62-1.98-1.137-1.995-1.15-.02-.018.123-.107.65-.406.371-.212.69-.384.708-.385.018 0 .781.426 1.695.947Zm-2.921.76.857.485v2.02l-.864.49c-.475.27-.871.494-.88.497a20.71 20.71 0 0 1-.896-.494l-.881-.5V6.995l.873-.497c.496-.283.886-.493.903-.487.017.006.416.228.888.495Zm2.259 1.29c.318.181.613.351.655.378l.076.048v1.947c0 2.075-.003 2.143-.102 2.53-.475 1.861-2.613 2.811-4.34 1.928-.205-.105-.555-.34-.54-.362.004-.008.758-.44 1.676-.962 1.097-.623 1.698-.975 1.752-1.028.162-.157.153-.003.153-2.575v-2.28l.046.023.624.353Zm-1.4 2.845v.797l-1.66.942c-.913.518-1.733.978-1.822 1.022a3.405 3.405 0 0 1-.742.247c-.183.04-.267.047-.598.047-.29 0-.429-.01-.558-.036-.982-.202-1.779-.814-2.193-1.683a2.683 2.683 0 0 1-.278-1.163c-.01-.278.01-.574.041-.604.005-.005.748.412 1.65.925.904.514 1.674.95 1.713.97a.511.511 0 0 0 .341.04c.062-.014.803-.425 2.095-1.16 1.1-.626 2.002-1.14 2.005-1.14.003-.001.005.357.005.796Z" clip-rule="evenodd"></path></g><defs><clipPath id="OpenAI_svg__a"><path fill="#fff" d="M.5 0h16v16H.5z"></path></clipPath></defs></svg>											
                    <?php echo e(__('GPT 3.5 Turbo')); ?>

                </h6>
                <p class="text-muted"><?php echo e(__('Very fast. Great for most use cases. Has 16k context length.')); ?></p>
                <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                    <?php if(auth()->user()->gpt_3_turbo_credits == -1): ?>
                        <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                    <?php elseif((auth()->user()->gpt_3_turbo_credits + auth()->user()->gpt_3_turbo_credits_prepaid) == 0): ?>
                        <?php echo e(__('No words left')); ?> <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                    <?php else: ?>
                        <?php echo e(App\Services\HelperService::userAvailableWords()); ?> <?php echo e(__('Words Available')); ?>

                    <?php endif; ?> 
                </p>
            </label>
        </div>
    <?php elseif(trim($model) == 'gpt-4'): ?>
        <div class="col-md-4 col-sm-12">
            <input type="radio" id="control_02" name="model" onclick="handleClick(this);" value="gpt-4" <?php if($default_model == 'gpt-4'): ?> checked <?php endif; ?> <?php if((auth()->user()->gpt_4_credits + auth()->user()->gpt_4_credits_prepaid) == 0): ?> disabled <?php endif; ?>>												
            <label for="control_02">
            <h6>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="mr-1 h-4 w-4 align-text-top"><g clip-path="url(#OpenAI_svg__a)"><path fill="currentColor" fill-rule="evenodd" d="M7.385.007a4.156 4.156 0 0 0-2.978 1.568c-.24.304-.463.699-.594 1.055l-.058.156-.219.056A4.031 4.031 0 0 0 .72 5.452a3.94 3.94 0 0 0 .23 3.13c.14.271.315.535.483.729l.12.139-.039.131a3.696 3.696 0 0 0-.159 1.133c0 .657.132 1.214.423 1.788a4.087 4.087 0 0 0 2.817 2.154c.49.1 1.106.116 1.516.039l.177-.033.214.201a4 4 0 0 0 1.561.935c.521.17.985.228 1.528.191 1.337-.092 2.469-.739 3.194-1.825.157-.236.244-.402.374-.718l.103-.249.111-.027a4.308 4.308 0 0 0 1.804-.94 4.082 4.082 0 0 0 1.24-2.16 3.994 3.994 0 0 0-.75-3.26c-.078-.1-.156-.2-.174-.225-.03-.042-.029-.06.03-.29.097-.378.128-.623.128-1.017 0-1.036-.386-1.985-1.132-2.78-.591-.63-1.53-1.096-2.445-1.214a5.048 5.048 0 0 0-1.183.022l-.179.034-.197-.19A4.116 4.116 0 0 0 8.645.125a4.586 4.586 0 0 0-1.26-.117Zm.872 1.098c.235.05.547.159.752.26.176.086.52.304.566.358.016.02-.373.25-1.648.975-.918.522-1.705.98-1.748 1.02a.593.593 0 0 0-.122.16c-.042.089-.043.109-.053 2.394l-.01 2.304-.64-.363c-.353-.2-.666-.379-.696-.398l-.055-.035V5.833c0-1.222.008-2.01.021-2.116a3.08 3.08 0 0 1 .588-1.466 3.82 3.82 0 0 1 .664-.642c.353-.247.856-.456 1.234-.513.09-.013.177-.027.193-.031.088-.021.815.01.954.04Zm3.819 1.232c1.554.275 2.64 1.657 2.514 3.198a2.432 2.432 0 0 1-.03.265c-.005.009-.615-.332-1.354-.756-2.133-1.222-2.065-1.185-2.171-1.2a.593.593 0 0 0-.185.01c-.051.013-.938.505-2.067 1.147a142.354 142.354 0 0 1-2.012 1.134c-.034.008-.036-.036-.036-.771 0-.718.003-.782.035-.81.068-.057 3.305-1.885 3.507-1.98.236-.11.552-.207.812-.246.285-.044.712-.04.986.01ZM3.63 7.971a.558.558 0 0 0 .133.16c.044.033.96.56 2.034 1.17a115.76 115.76 0 0 1 1.953 1.122c0 .027-1.333.77-1.38.77-.045 0-3.031-1.683-3.421-1.928a3.04 3.04 0 0 1-1.333-1.937 3.356 3.356 0 0 1 0-1.165c.095-.422.223-.728.439-1.045.36-.53.832-.905 1.452-1.154l.05-.02.011 1.963.01 1.965.052.099Zm8.7-2.226c1.896 1.08 1.735.985 1.947 1.146a2.955 2.955 0 0 1 1.169 2.35c0 .513-.097.927-.328 1.383a3.15 3.15 0 0 1-1.05 1.149c-.134.084-.54.29-.577.29-.008 0-.018-.875-.02-1.946l-.006-1.946-.047-.092a.654.654 0 0 0-.111-.153c-.036-.034-.952-.568-2.035-1.187-1.083-.62-1.98-1.137-1.995-1.15-.02-.018.123-.107.65-.406.371-.212.69-.384.708-.385.018 0 .781.426 1.695.947Zm-2.921.76.857.485v2.02l-.864.49c-.475.27-.871.494-.88.497a20.71 20.71 0 0 1-.896-.494l-.881-.5V6.995l.873-.497c.496-.283.886-.493.903-.487.017.006.416.228.888.495Zm2.259 1.29c.318.181.613.351.655.378l.076.048v1.947c0 2.075-.003 2.143-.102 2.53-.475 1.861-2.613 2.811-4.34 1.928-.205-.105-.555-.34-.54-.362.004-.008.758-.44 1.676-.962 1.097-.623 1.698-.975 1.752-1.028.162-.157.153-.003.153-2.575v-2.28l.046.023.624.353Zm-1.4 2.845v.797l-1.66.942c-.913.518-1.733.978-1.822 1.022a3.405 3.405 0 0 1-.742.247c-.183.04-.267.047-.598.047-.29 0-.429-.01-.558-.036-.982-.202-1.779-.814-2.193-1.683a2.683 2.683 0 0 1-.278-1.163c-.01-.278.01-.574.041-.604.005-.005.748.412 1.65.925.904.514 1.674.95 1.713.97a.511.511 0 0 0 .341.04c.062-.014.803-.425 2.095-1.16 1.1-.626 2.002-1.14 2.005-1.14.003-.001.005.357.005.796Z" clip-rule="evenodd"></path></g><defs><clipPath id="OpenAI_svg__a"><path fill="#fff" d="M.5 0h16v16H.5z"></path></clipPath></defs></svg>											
                <?php echo e(__('GPT 4')); ?>

            </h6>
            <p class="text-muted"><?php echo e(__('Most advanced system from OpenAI. Can solve difficult problems with greater accuracy. Has 8k context window.')); ?></p>
            <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                <?php if(auth()->user()->gpt_4_credits == -1): ?>
                    <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                <?php elseif((auth()->user()->gpt_4_credits + auth()->user()->gpt_4_credits_prepaid) == 0): ?>
                    <?php echo e(__('No words left')); ?> <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                <?php else: ?>
                    <?php echo e(App\Services\HelperService::userAvailableGPT4Words()); ?> <?php echo e(__('Words Available')); ?>

                <?php endif; ?> 
            </p>
            </label>
        </div>
    <?php elseif(trim($model) == 'gpt-4o'): ?>
        <div class="col-md-4 col-sm-12">
            <input type="radio" id="control_10" name="model" onclick="handleClick(this);" value="gpt-4o" <?php if($default_model == 'gpt-4o'): ?> checked <?php endif; ?> <?php if((auth()->user()->gpt_4o_credits + auth()->user()->gpt_4o_credits_prepaid) == 0): ?> disabled <?php endif; ?>>
            <label for="control_10">
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="mr-1 h-4 w-4 align-text-top"><g clip-path="url(#OpenAI_svg__a)"><path fill="currentColor" fill-rule="evenodd" d="M7.385.007a4.156 4.156 0 0 0-2.978 1.568c-.24.304-.463.699-.594 1.055l-.058.156-.219.056A4.031 4.031 0 0 0 .72 5.452a3.94 3.94 0 0 0 .23 3.13c.14.271.315.535.483.729l.12.139-.039.131a3.696 3.696 0 0 0-.159 1.133c0 .657.132 1.214.423 1.788a4.087 4.087 0 0 0 2.817 2.154c.49.1 1.106.116 1.516.039l.177-.033.214.201a4 4 0 0 0 1.561.935c.521.17.985.228 1.528.191 1.337-.092 2.469-.739 3.194-1.825.157-.236.244-.402.374-.718l.103-.249.111-.027a4.308 4.308 0 0 0 1.804-.94 4.082 4.082 0 0 0 1.24-2.16 3.994 3.994 0 0 0-.75-3.26c-.078-.1-.156-.2-.174-.225-.03-.042-.029-.06.03-.29.097-.378.128-.623.128-1.017 0-1.036-.386-1.985-1.132-2.78-.591-.63-1.53-1.096-2.445-1.214a5.048 5.048 0 0 0-1.183.022l-.179.034-.197-.19A4.116 4.116 0 0 0 8.645.125a4.586 4.586 0 0 0-1.26-.117Zm.872 1.098c.235.05.547.159.752.26.176.086.52.304.566.358.016.02-.373.25-1.648.975-.918.522-1.705.98-1.748 1.02a.593.593 0 0 0-.122.16c-.042.089-.043.109-.053 2.394l-.01 2.304-.64-.363c-.353-.2-.666-.379-.696-.398l-.055-.035V5.833c0-1.222.008-2.01.021-2.116a3.08 3.08 0 0 1 .588-1.466 3.82 3.82 0 0 1 .664-.642c.353-.247.856-.456 1.234-.513.09-.013.177-.027.193-.031.088-.021.815.01.954.04Zm3.819 1.232c1.554.275 2.64 1.657 2.514 3.198a2.432 2.432 0 0 1-.03.265c-.005.009-.615-.332-1.354-.756-2.133-1.222-2.065-1.185-2.171-1.2a.593.593 0 0 0-.185.01c-.051.013-.938.505-2.067 1.147a142.354 142.354 0 0 1-2.012 1.134c-.034.008-.036-.036-.036-.771 0-.718.003-.782.035-.81.068-.057 3.305-1.885 3.507-1.98.236-.11.552-.207.812-.246.285-.044.712-.04.986.01ZM3.63 7.971a.558.558 0 0 0 .133.16c.044.033.96.56 2.034 1.17a115.76 115.76 0 0 1 1.953 1.122c0 .027-1.333.77-1.38.77-.045 0-3.031-1.683-3.421-1.928a3.04 3.04 0 0 1-1.333-1.937 3.356 3.356 0 0 1 0-1.165c.095-.422.223-.728.439-1.045.36-.53.832-.905 1.452-1.154l.05-.02.011 1.963.01 1.965.052.099Zm8.7-2.226c1.896 1.08 1.735.985 1.947 1.146a2.955 2.955 0 0 1 1.169 2.35c0 .513-.097.927-.328 1.383a3.15 3.15 0 0 1-1.05 1.149c-.134.084-.54.29-.577.29-.008 0-.018-.875-.02-1.946l-.006-1.946-.047-.092a.654.654 0 0 0-.111-.153c-.036-.034-.952-.568-2.035-1.187-1.083-.62-1.98-1.137-1.995-1.15-.02-.018.123-.107.65-.406.371-.212.69-.384.708-.385.018 0 .781.426 1.695.947Zm-2.921.76.857.485v2.02l-.864.49c-.475.27-.871.494-.88.497a20.71 20.71 0 0 1-.896-.494l-.881-.5V6.995l.873-.497c.496-.283.886-.493.903-.487.017.006.416.228.888.495Zm2.259 1.29c.318.181.613.351.655.378l.076.048v1.947c0 2.075-.003 2.143-.102 2.53-.475 1.861-2.613 2.811-4.34 1.928-.205-.105-.555-.34-.54-.362.004-.008.758-.44 1.676-.962 1.097-.623 1.698-.975 1.752-1.028.162-.157.153-.003.153-2.575v-2.28l.046.023.624.353Zm-1.4 2.845v.797l-1.66.942c-.913.518-1.733.978-1.822 1.022a3.405 3.405 0 0 1-.742.247c-.183.04-.267.047-.598.047-.29 0-.429-.01-.558-.036-.982-.202-1.779-.814-2.193-1.683a2.683 2.683 0 0 1-.278-1.163c-.01-.278.01-.574.041-.604.005-.005.748.412 1.65.925.904.514 1.674.95 1.713.97a.511.511 0 0 0 .341.04c.062-.014.803-.425 2.095-1.16 1.1-.626 2.002-1.14 2.005-1.14.003-.001.005.357.005.796Z" clip-rule="evenodd"></path></g><defs><clipPath id="OpenAI_svg__a"><path fill="#fff" d="M.5 0h16v16H.5z"></path></clipPath></defs></svg>											
                    <?php echo e(__('GPT 4o')); ?>

                </h6>
                <p class="text-muted"><?php echo e(__('The latest most advanced model of Openai. It can solve difficult problems with greater accuracy than any of our previous models')); ?></p>
                <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                    <?php if(auth()->user()->gpt_4o_credits == -1): ?>
                        <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                    <?php elseif((auth()->user()->gpt_4o_credits + auth()->user()->gpt_4o_credits_prepaid) == 0): ?>
                        <?php echo e(__('No words left')); ?> <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                    <?php else: ?>
                        <?php echo e(App\Services\HelperService::userAvailableGPT4oWords()); ?> <?php echo e(__('Words Available')); ?>

                    <?php endif; ?> 
                </p>
            </label>
        </div>
    <?php elseif(trim($model) == 'gpt-4o-mini'): ?>
        <div class="col-md-4 col-sm-12">
            <input type="radio" id="control_18" name="model" onclick="handleClick(this);" value="gpt-4o-mini" <?php if($default_model == 'gpt-4o-mini'): ?> checked <?php endif; ?> <?php if((auth()->user()->gpt_4o_mini_credits + auth()->user()->gpt_4o_mini_credits_prepaid) == 0): ?> disabled <?php endif; ?>>
            <label for="control_18">
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="mr-1 h-4 w-4 align-text-top"><g clip-path="url(#OpenAI_svg__a)"><path fill="currentColor" fill-rule="evenodd" d="M7.385.007a4.156 4.156 0 0 0-2.978 1.568c-.24.304-.463.699-.594 1.055l-.058.156-.219.056A4.031 4.031 0 0 0 .72 5.452a3.94 3.94 0 0 0 .23 3.13c.14.271.315.535.483.729l.12.139-.039.131a3.696 3.696 0 0 0-.159 1.133c0 .657.132 1.214.423 1.788a4.087 4.087 0 0 0 2.817 2.154c.49.1 1.106.116 1.516.039l.177-.033.214.201a4 4 0 0 0 1.561.935c.521.17.985.228 1.528.191 1.337-.092 2.469-.739 3.194-1.825.157-.236.244-.402.374-.718l.103-.249.111-.027a4.308 4.308 0 0 0 1.804-.94 4.082 4.082 0 0 0 1.24-2.16 3.994 3.994 0 0 0-.75-3.26c-.078-.1-.156-.2-.174-.225-.03-.042-.029-.06.03-.29.097-.378.128-.623.128-1.017 0-1.036-.386-1.985-1.132-2.78-.591-.63-1.53-1.096-2.445-1.214a5.048 5.048 0 0 0-1.183.022l-.179.034-.197-.19A4.116 4.116 0 0 0 8.645.125a4.586 4.586 0 0 0-1.26-.117Zm.872 1.098c.235.05.547.159.752.26.176.086.52.304.566.358.016.02-.373.25-1.648.975-.918.522-1.705.98-1.748 1.02a.593.593 0 0 0-.122.16c-.042.089-.043.109-.053 2.394l-.01 2.304-.64-.363c-.353-.2-.666-.379-.696-.398l-.055-.035V5.833c0-1.222.008-2.01.021-2.116a3.08 3.08 0 0 1 .588-1.466 3.82 3.82 0 0 1 .664-.642c.353-.247.856-.456 1.234-.513.09-.013.177-.027.193-.031.088-.021.815.01.954.04Zm3.819 1.232c1.554.275 2.64 1.657 2.514 3.198a2.432 2.432 0 0 1-.03.265c-.005.009-.615-.332-1.354-.756-2.133-1.222-2.065-1.185-2.171-1.2a.593.593 0 0 0-.185.01c-.051.013-.938.505-2.067 1.147a142.354 142.354 0 0 1-2.012 1.134c-.034.008-.036-.036-.036-.771 0-.718.003-.782.035-.81.068-.057 3.305-1.885 3.507-1.98.236-.11.552-.207.812-.246.285-.044.712-.04.986.01ZM3.63 7.971a.558.558 0 0 0 .133.16c.044.033.96.56 2.034 1.17a115.76 115.76 0 0 1 1.953 1.122c0 .027-1.333.77-1.38.77-.045 0-3.031-1.683-3.421-1.928a3.04 3.04 0 0 1-1.333-1.937 3.356 3.356 0 0 1 0-1.165c.095-.422.223-.728.439-1.045.36-.53.832-.905 1.452-1.154l.05-.02.011 1.963.01 1.965.052.099Zm8.7-2.226c1.896 1.08 1.735.985 1.947 1.146a2.955 2.955 0 0 1 1.169 2.35c0 .513-.097.927-.328 1.383a3.15 3.15 0 0 1-1.05 1.149c-.134.084-.54.29-.577.29-.008 0-.018-.875-.02-1.946l-.006-1.946-.047-.092a.654.654 0 0 0-.111-.153c-.036-.034-.952-.568-2.035-1.187-1.083-.62-1.98-1.137-1.995-1.15-.02-.018.123-.107.65-.406.371-.212.69-.384.708-.385.018 0 .781.426 1.695.947Zm-2.921.76.857.485v2.02l-.864.49c-.475.27-.871.494-.88.497a20.71 20.71 0 0 1-.896-.494l-.881-.5V6.995l.873-.497c.496-.283.886-.493.903-.487.017.006.416.228.888.495Zm2.259 1.29c.318.181.613.351.655.378l.076.048v1.947c0 2.075-.003 2.143-.102 2.53-.475 1.861-2.613 2.811-4.34 1.928-.205-.105-.555-.34-.54-.362.004-.008.758-.44 1.676-.962 1.097-.623 1.698-.975 1.752-1.028.162-.157.153-.003.153-2.575v-2.28l.046.023.624.353Zm-1.4 2.845v.797l-1.66.942c-.913.518-1.733.978-1.822 1.022a3.405 3.405 0 0 1-.742.247c-.183.04-.267.047-.598.047-.29 0-.429-.01-.558-.036-.982-.202-1.779-.814-2.193-1.683a2.683 2.683 0 0 1-.278-1.163c-.01-.278.01-.574.041-.604.005-.005.748.412 1.65.925.904.514 1.674.95 1.713.97a.511.511 0 0 0 .341.04c.062-.014.803-.425 2.095-1.16 1.1-.626 2.002-1.14 2.005-1.14.003-.001.005.357.005.796Z" clip-rule="evenodd"></path></g><defs><clipPath id="OpenAI_svg__a"><path fill="#fff" d="M.5 0h16v16H.5z"></path></clipPath></defs></svg>											
                    <?php echo e(__('GPT 4o mini')); ?>

                </h6>
                <p class="text-muted"><?php echo e(__('The most newest and advanced model of Openai. It can solve difficult problems with greater accuracy than any of our previous models')); ?></p>
                <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                    <?php if(auth()->user()->gpt_4o_mini_credits == -1): ?>
                        <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                    <?php elseif((auth()->user()->gpt_4o_mini_credits + auth()->user()->gpt_4o_mini_credits_prepaid) == 0): ?>
                        <?php echo e(__('No words left')); ?> <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                    <?php else: ?>
                        <?php echo e(App\Services\HelperService::userAvailableGPT4oMiniWords()); ?> <?php echo e(__('Words Available')); ?>

                    <?php endif; ?> 
                </p>
            </label>
        </div>
    <?php elseif(trim($model) == 'gpt-4-0125-preview'): ?>
        <div class="col-md-4 col-sm-12">
            <input type="radio" id="control_03" name="model" onclick="handleClick(this);" value="gpt-4-0125-preview" <?php if($default_model == 'gpt-4-0125-preview'): ?> checked <?php endif; ?> <?php if((auth()->user()->gpt_4_turbo_credits + auth()->user()->gpt_4_turbo_credits_prepaid) == 0): ?> disabled <?php endif; ?>>
            <label for="control_03">
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="mr-1 h-4 w-4 align-text-top"><g clip-path="url(#OpenAI_svg__a)"><path fill="currentColor" fill-rule="evenodd" d="M7.385.007a4.156 4.156 0 0 0-2.978 1.568c-.24.304-.463.699-.594 1.055l-.058.156-.219.056A4.031 4.031 0 0 0 .72 5.452a3.94 3.94 0 0 0 .23 3.13c.14.271.315.535.483.729l.12.139-.039.131a3.696 3.696 0 0 0-.159 1.133c0 .657.132 1.214.423 1.788a4.087 4.087 0 0 0 2.817 2.154c.49.1 1.106.116 1.516.039l.177-.033.214.201a4 4 0 0 0 1.561.935c.521.17.985.228 1.528.191 1.337-.092 2.469-.739 3.194-1.825.157-.236.244-.402.374-.718l.103-.249.111-.027a4.308 4.308 0 0 0 1.804-.94 4.082 4.082 0 0 0 1.24-2.16 3.994 3.994 0 0 0-.75-3.26c-.078-.1-.156-.2-.174-.225-.03-.042-.029-.06.03-.29.097-.378.128-.623.128-1.017 0-1.036-.386-1.985-1.132-2.78-.591-.63-1.53-1.096-2.445-1.214a5.048 5.048 0 0 0-1.183.022l-.179.034-.197-.19A4.116 4.116 0 0 0 8.645.125a4.586 4.586 0 0 0-1.26-.117Zm.872 1.098c.235.05.547.159.752.26.176.086.52.304.566.358.016.02-.373.25-1.648.975-.918.522-1.705.98-1.748 1.02a.593.593 0 0 0-.122.16c-.042.089-.043.109-.053 2.394l-.01 2.304-.64-.363c-.353-.2-.666-.379-.696-.398l-.055-.035V5.833c0-1.222.008-2.01.021-2.116a3.08 3.08 0 0 1 .588-1.466 3.82 3.82 0 0 1 .664-.642c.353-.247.856-.456 1.234-.513.09-.013.177-.027.193-.031.088-.021.815.01.954.04Zm3.819 1.232c1.554.275 2.64 1.657 2.514 3.198a2.432 2.432 0 0 1-.03.265c-.005.009-.615-.332-1.354-.756-2.133-1.222-2.065-1.185-2.171-1.2a.593.593 0 0 0-.185.01c-.051.013-.938.505-2.067 1.147a142.354 142.354 0 0 1-2.012 1.134c-.034.008-.036-.036-.036-.771 0-.718.003-.782.035-.81.068-.057 3.305-1.885 3.507-1.98.236-.11.552-.207.812-.246.285-.044.712-.04.986.01ZM3.63 7.971a.558.558 0 0 0 .133.16c.044.033.96.56 2.034 1.17a115.76 115.76 0 0 1 1.953 1.122c0 .027-1.333.77-1.38.77-.045 0-3.031-1.683-3.421-1.928a3.04 3.04 0 0 1-1.333-1.937 3.356 3.356 0 0 1 0-1.165c.095-.422.223-.728.439-1.045.36-.53.832-.905 1.452-1.154l.05-.02.011 1.963.01 1.965.052.099Zm8.7-2.226c1.896 1.08 1.735.985 1.947 1.146a2.955 2.955 0 0 1 1.169 2.35c0 .513-.097.927-.328 1.383a3.15 3.15 0 0 1-1.05 1.149c-.134.084-.54.29-.577.29-.008 0-.018-.875-.02-1.946l-.006-1.946-.047-.092a.654.654 0 0 0-.111-.153c-.036-.034-.952-.568-2.035-1.187-1.083-.62-1.98-1.137-1.995-1.15-.02-.018.123-.107.65-.406.371-.212.69-.384.708-.385.018 0 .781.426 1.695.947Zm-2.921.76.857.485v2.02l-.864.49c-.475.27-.871.494-.88.497a20.71 20.71 0 0 1-.896-.494l-.881-.5V6.995l.873-.497c.496-.283.886-.493.903-.487.017.006.416.228.888.495Zm2.259 1.29c.318.181.613.351.655.378l.076.048v1.947c0 2.075-.003 2.143-.102 2.53-.475 1.861-2.613 2.811-4.34 1.928-.205-.105-.555-.34-.54-.362.004-.008.758-.44 1.676-.962 1.097-.623 1.698-.975 1.752-1.028.162-.157.153-.003.153-2.575v-2.28l.046.023.624.353Zm-1.4 2.845v.797l-1.66.942c-.913.518-1.733.978-1.822 1.022a3.405 3.405 0 0 1-.742.247c-.183.04-.267.047-.598.047-.29 0-.429-.01-.558-.036-.982-.202-1.779-.814-2.193-1.683a2.683 2.683 0 0 1-.278-1.163c-.01-.278.01-.574.041-.604.005-.005.748.412 1.65.925.904.514 1.674.95 1.713.97a.511.511 0 0 0 .341.04c.062-.014.803-.425 2.095-1.16 1.1-.626 2.002-1.14 2.005-1.14.003-.001.005.357.005.796Z" clip-rule="evenodd"></path></g><defs><clipPath id="OpenAI_svg__a"><path fill="#fff" d="M.5 0h16v16H.5z"></path></clipPath></defs></svg>											
                    <?php echo e(__('GPT 4 Turbo')); ?>

                </h6>
                <p class="text-muted"><?php echo e(__('The latest GPT-4 model with improved performance. Has 128k context window. Trained up to December 2023 data.')); ?></p>
                <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                    <?php if(auth()->user()->gpt_4_turbo_credits == -1): ?>
                        <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                    <?php elseif((auth()->user()->gpt_4_turbo_credits + auth()->user()->gpt_4_turbo_credits_prepaid) == 0): ?>
                        <?php echo e(__('No words left')); ?> <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                    <?php else: ?>
                        <?php echo e(App\Services\HelperService::userAvailableGPT4TWords()); ?> <?php echo e(__('Words Available')); ?>

                    <?php endif; ?> 
                </p>
            </label>
        </div>
    <?php elseif(trim($model) == 'gpt-4-turbo-2024-04-09'): ?>
        <div class="col-md-4 col-sm-12">
            <input type="radio" id="control_04" name="model" onclick="handleClick(this);" value="gpt-4-turbo-2024-04-09" <?php if($default_model == 'gpt-4-turbo-2024-04-09'): ?> checked <?php endif; ?> <?php if((auth()->user()->gpt_4_turbo_credits + auth()->user()->gpt_4_turbo_credits_prepaid) == 0): ?> disabled <?php endif; ?>>
            <label for="control_04">
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="mr-1 h-4 w-4 align-text-top"><g clip-path="url(#OpenAI_svg__a)"><path fill="currentColor" fill-rule="evenodd" d="M7.385.007a4.156 4.156 0 0 0-2.978 1.568c-.24.304-.463.699-.594 1.055l-.058.156-.219.056A4.031 4.031 0 0 0 .72 5.452a3.94 3.94 0 0 0 .23 3.13c.14.271.315.535.483.729l.12.139-.039.131a3.696 3.696 0 0 0-.159 1.133c0 .657.132 1.214.423 1.788a4.087 4.087 0 0 0 2.817 2.154c.49.1 1.106.116 1.516.039l.177-.033.214.201a4 4 0 0 0 1.561.935c.521.17.985.228 1.528.191 1.337-.092 2.469-.739 3.194-1.825.157-.236.244-.402.374-.718l.103-.249.111-.027a4.308 4.308 0 0 0 1.804-.94 4.082 4.082 0 0 0 1.24-2.16 3.994 3.994 0 0 0-.75-3.26c-.078-.1-.156-.2-.174-.225-.03-.042-.029-.06.03-.29.097-.378.128-.623.128-1.017 0-1.036-.386-1.985-1.132-2.78-.591-.63-1.53-1.096-2.445-1.214a5.048 5.048 0 0 0-1.183.022l-.179.034-.197-.19A4.116 4.116 0 0 0 8.645.125a4.586 4.586 0 0 0-1.26-.117Zm.872 1.098c.235.05.547.159.752.26.176.086.52.304.566.358.016.02-.373.25-1.648.975-.918.522-1.705.98-1.748 1.02a.593.593 0 0 0-.122.16c-.042.089-.043.109-.053 2.394l-.01 2.304-.64-.363c-.353-.2-.666-.379-.696-.398l-.055-.035V5.833c0-1.222.008-2.01.021-2.116a3.08 3.08 0 0 1 .588-1.466 3.82 3.82 0 0 1 .664-.642c.353-.247.856-.456 1.234-.513.09-.013.177-.027.193-.031.088-.021.815.01.954.04Zm3.819 1.232c1.554.275 2.64 1.657 2.514 3.198a2.432 2.432 0 0 1-.03.265c-.005.009-.615-.332-1.354-.756-2.133-1.222-2.065-1.185-2.171-1.2a.593.593 0 0 0-.185.01c-.051.013-.938.505-2.067 1.147a142.354 142.354 0 0 1-2.012 1.134c-.034.008-.036-.036-.036-.771 0-.718.003-.782.035-.81.068-.057 3.305-1.885 3.507-1.98.236-.11.552-.207.812-.246.285-.044.712-.04.986.01ZM3.63 7.971a.558.558 0 0 0 .133.16c.044.033.96.56 2.034 1.17a115.76 115.76 0 0 1 1.953 1.122c0 .027-1.333.77-1.38.77-.045 0-3.031-1.683-3.421-1.928a3.04 3.04 0 0 1-1.333-1.937 3.356 3.356 0 0 1 0-1.165c.095-.422.223-.728.439-1.045.36-.53.832-.905 1.452-1.154l.05-.02.011 1.963.01 1.965.052.099Zm8.7-2.226c1.896 1.08 1.735.985 1.947 1.146a2.955 2.955 0 0 1 1.169 2.35c0 .513-.097.927-.328 1.383a3.15 3.15 0 0 1-1.05 1.149c-.134.084-.54.29-.577.29-.008 0-.018-.875-.02-1.946l-.006-1.946-.047-.092a.654.654 0 0 0-.111-.153c-.036-.034-.952-.568-2.035-1.187-1.083-.62-1.98-1.137-1.995-1.15-.02-.018.123-.107.65-.406.371-.212.69-.384.708-.385.018 0 .781.426 1.695.947Zm-2.921.76.857.485v2.02l-.864.49c-.475.27-.871.494-.88.497a20.71 20.71 0 0 1-.896-.494l-.881-.5V6.995l.873-.497c.496-.283.886-.493.903-.487.017.006.416.228.888.495Zm2.259 1.29c.318.181.613.351.655.378l.076.048v1.947c0 2.075-.003 2.143-.102 2.53-.475 1.861-2.613 2.811-4.34 1.928-.205-.105-.555-.34-.54-.362.004-.008.758-.44 1.676-.962 1.097-.623 1.698-.975 1.752-1.028.162-.157.153-.003.153-2.575v-2.28l.046.023.624.353Zm-1.4 2.845v.797l-1.66.942c-.913.518-1.733.978-1.822 1.022a3.405 3.405 0 0 1-.742.247c-.183.04-.267.047-.598.047-.29 0-.429-.01-.558-.036-.982-.202-1.779-.814-2.193-1.683a2.683 2.683 0 0 1-.278-1.163c-.01-.278.01-.574.041-.604.005-.005.748.412 1.65.925.904.514 1.674.95 1.713.97a.511.511 0 0 0 .341.04c.062-.014.803-.425 2.095-1.16 1.1-.626 2.002-1.14 2.005-1.14.003-.001.005.357.005.796Z" clip-rule="evenodd"></path></g><defs><clipPath id="OpenAI_svg__a"><path fill="#fff" d="M.5 0h16v16H.5z"></path></clipPath></defs></svg>											
                    <?php echo e(__('GPT 4 Turbo Vision')); ?>

                </h6>
                <p class="text-muted"><?php echo e(__('The latest GPT-4 model with improved instruction following and with vision capabilities. Has 128k context window. Trained up to December 2023 data.')); ?></p>
                <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                    <?php if(auth()->user()->gpt_4_turbo_credits == -1): ?>
                        <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                    <?php elseif((auth()->user()->gpt_4_turbo_credits + auth()->user()->gpt_4_turbo_credits_prepaid) == 0): ?>
                        <?php echo e(__('No words left')); ?> <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                    <?php else: ?>
                        <?php echo e(App\Services\HelperService::userAvailableGPT4TWords()); ?> <?php echo e(__('Words Available')); ?>

                    <?php endif; ?> 
                </p>
            </label>
        </div>
    <?php elseif(trim($model) == 'claude-3-opus-20240229'): ?>
        <div class="col-md-4 col-sm-12">
            <input type="radio" id="control_05" name="model" onclick="handleClick(this);" value="claude-3-opus-20240229" <?php if($default_model == 'claude-3-opus-20240229'): ?> checked <?php endif; ?> <?php if((auth()->user()->gpt_4_credits + auth()->user()->gpt_4_credits_prepaid) == 0): ?> disabled <?php endif; ?>>
            <label for="control_05">
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="mr-1 inline-block h-4 w-4 align-text-top" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M3.512 6.065c-.777 1.87-1.772 4.262-2.212 5.317l-.8 1.92 1.229.017c.676.01 1.24.006 1.255-.008.015-.014.221-.505.459-1.09l.431-1.066h4.718l.117.293.44 1.089.321.797h1.258c.98 0 1.25-.018 1.224-.082a3382.243 3382.243 0 0 1-3.78-9.073l-.625-1.512H4.924L3.512 6.065ZM9.68 2.788c.018.066 1.007 2.466 2.198 5.332l2.165 5.213h1.244c.684 0 1.23-.021 1.213-.048-.047-.074-4.3-10.303-4.354-10.472-.047-.144-.061-.146-1.274-.146-1.16 0-1.224.006-1.192.12ZM6.576 6.195c.178.439.515 1.265.75 1.838l.425 1.04-.739.019c-.406.01-1.089.01-1.517 0l-.78-.019.358-.878.748-1.837c.215-.528.4-.96.41-.96.012 0 .167.36.345.797Z" clip-rule="evenodd"></path></svg>
                    <?php echo e(__('Claude 3 Opus')); ?>

                </h6>
                <p class="text-muted"><?php echo e(__('Most powerful model for highly complex tasks. Top-level performance, intelligence, fluency, and understanding. Has 200k context window. Trained till August 2023 data.')); ?></p>
                <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                    <?php if(auth()->user()->claude_3_opus_credits == -1): ?>
                        <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                    <?php elseif((auth()->user()->claude_3_opus_credits + auth()->user()->claude_3_opus_credits_prepaid) == 0): ?>
                        <?php echo e(__('No words left')); ?> <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                    <?php else: ?>
                        <?php echo e(App\Services\HelperService::userAvailableClaudeOpusWords()); ?> <?php echo e(__('Words Available')); ?>

                    <?php endif; ?> 
                </p>
            </label>
        </div>
    <?php elseif(trim($model) == 'claude-3-5-sonnet-20240620'): ?>
        <div class="col-md-4 col-sm-12">
            <input type="radio" id="control_06" name="model" onclick="handleClick(this);" value="claude-3-5-sonnet-20240620" <?php if($default_model == 'claude-3-5-sonnet-20240620'): ?> checked <?php endif; ?> <?php if((auth()->user()->claude_3_sonnet_credits + auth()->user()->claude_3_sonnet_credits_prepaid) == 0): ?> disabled <?php endif; ?>>
            <label for="control_06">
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="mr-1 inline-block h-4 w-4 align-text-top" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M3.512 6.065c-.777 1.87-1.772 4.262-2.212 5.317l-.8 1.92 1.229.017c.676.01 1.24.006 1.255-.008.015-.014.221-.505.459-1.09l.431-1.066h4.718l.117.293.44 1.089.321.797h1.258c.98 0 1.25-.018 1.224-.082a3382.243 3382.243 0 0 1-3.78-9.073l-.625-1.512H4.924L3.512 6.065ZM9.68 2.788c.018.066 1.007 2.466 2.198 5.332l2.165 5.213h1.244c.684 0 1.23-.021 1.213-.048-.047-.074-4.3-10.303-4.354-10.472-.047-.144-.061-.146-1.274-.146-1.16 0-1.224.006-1.192.12ZM6.576 6.195c.178.439.515 1.265.75 1.838l.425 1.04-.739.019c-.406.01-1.089.01-1.517 0l-.78-.019.358-.878.748-1.837c.215-.528.4-.96.41-.96.012 0 .167.36.345.797Z" clip-rule="evenodd"></path></svg>
                    <?php echo e(__('Claude 3.5 Sonnet')); ?>

                </h6>
                <p class="text-muted"><?php echo e(__('Ideal balance of intelligence and speed for enterprise workloads. Has 200k context window. Trained till August 2023 data.')); ?></p>
                <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                    <?php if(auth()->user()->claude_3_sonnet_credits == -1): ?>
                        <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                    <?php elseif((auth()->user()->claude_3_sonnet_credits + auth()->user()->claude_3_sonnet_credits_prepaid) == 0): ?>
                        <?php echo e(__('No words left')); ?> <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                    <?php else: ?>
                        <?php echo e(App\Services\HelperService::userAvailableClaudeSonnetWords()); ?> <?php echo e(__('Words Available')); ?>

                    <?php endif; ?> 
                </p>
            </label>
        </div>
    <?php elseif(trim($model) == 'claude-3-haiku-20240307'): ?>
        <div class="col-md-4 col-sm-12">
            <input type="radio" id="control_07" name="model" onclick="handleClick(this);" value="claude-3-haiku-20240307" <?php if($default_model == 'claude-3-haiku-20240307'): ?> checked <?php endif; ?> <?php if((auth()->user()->claude_3_haiku_credits + auth()->user()->claude_3_haiku_credits_prepaid) == 0): ?> disabled <?php endif; ?>>
            <label for="control_07">
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="mr-1 inline-block h-4 w-4 align-text-top" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M3.512 6.065c-.777 1.87-1.772 4.262-2.212 5.317l-.8 1.92 1.229.017c.676.01 1.24.006 1.255-.008.015-.014.221-.505.459-1.09l.431-1.066h4.718l.117.293.44 1.089.321.797h1.258c.98 0 1.25-.018 1.224-.082a3382.243 3382.243 0 0 1-3.78-9.073l-.625-1.512H4.924L3.512 6.065ZM9.68 2.788c.018.066 1.007 2.466 2.198 5.332l2.165 5.213h1.244c.684 0 1.23-.021 1.213-.048-.047-.074-4.3-10.303-4.354-10.472-.047-.144-.061-.146-1.274-.146-1.16 0-1.224.006-1.192.12ZM6.576 6.195c.178.439.515 1.265.75 1.838l.425 1.04-.739.019c-.406.01-1.089.01-1.517 0l-.78-.019.358-.878.748-1.837c.215-.528.4-.96.41-.96.012 0 .167.36.345.797Z" clip-rule="evenodd"></path></svg>
                    <?php echo e(__('Claude 3 Haiku')); ?>

                </h6>
                <p class="text-muted"><?php echo e(__('Fastest and most compact model for near-instant responsiveness. Quick and accurate targeted performance.')); ?></p>
                <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                    <?php if(auth()->user()->claude_3_haiku_credits == -1): ?>
                        <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                    <?php elseif((auth()->user()->claude_3_haiku_credits + auth()->user()->claude_3_haiku_credits_prepaid) == 0): ?>
                        <?php echo e(__('No words left')); ?> <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                    <?php else: ?>
                        <?php echo e(App\Services\HelperService::userAvailableClaudeHaikuWords()); ?> <?php echo e(__('Words Available')); ?>

                    <?php endif; ?> 
                </p>
            </label>
        </div>
    <?php elseif(trim($model) == 'gemini_pro'): ?>
        <div class="col-md-4 col-sm-12">
            <input type="radio" id="control_08" name="model" onclick="handleClick(this);" value="gemini_pro" <?php if($default_model == 'gemini_pro'): ?> checked <?php endif; ?> <?php if((auth()->user()->gemini_pro_credits + auth()->user()->gemini_pro_credits_prepaid) == 0): ?> disabled <?php endif; ?>>
            <label for="control_08">
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48" class="mr-1 inline-block h-4 w-4 align-text-top" aria-hidden="true"><path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"></path><path fill="#FF3D00" d="m6.306 14.691 6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 16.318 4 9.656 8.337 6.306 14.691z"></path><path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"></path><path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002 6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"></path></svg>
                    <?php echo e(__('Gemini Pro')); ?>

                </h6>
                <p class="text-muted"><?php echo e(__('Largest and most capable AI model of Google. Last updated in December 2023. Has 30k context window.')); ?></p>
                <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                    <?php if(auth()->user()->gemini_pro_credits == -1): ?>
                        <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                    <?php elseif((auth()->user()->gemini_pro_credits + auth()->user()->gemini_pro_credits_prepaid) == 0): ?>
                        <?php echo e(__('No words left')); ?> <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                    <?php else: ?>
                        <?php echo e(App\Services\HelperService::userAvailableGeminiProWords()); ?> <?php echo e(__('Words Available')); ?>

                    <?php endif; ?> 
                </p>
            </label>
        </div>
    <?php else: ?>
        <?php $__currentLoopData = $fine_tunes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$fine_tune): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(trim($model) == $fine_tune): ?>
                <div class="col-md-4 col-sm-12">
                    <input type="radio" id="control_<?php echo e($key); ?>_f" name="model" onclick="handleClick(this);" value="<?php echo e($fine_tune->model); ?>" <?php if($default_model == $fine_tune->model): ?> checked <?php endif; ?> <?php if((auth()->user()->fine_tune_credits + auth()->user()->fine_tune_credits_prepaid) == 0): ?> disabled <?php endif; ?>>
                    <label for="control_<?php echo e($key); ?>_f">
                        <h6>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" class="mr-1 h-4 w-4 align-text-top"><g clip-path="url(#OpenAI_svg__a)"><path fill="currentColor" fill-rule="evenodd" d="M7.385.007a4.156 4.156 0 0 0-2.978 1.568c-.24.304-.463.699-.594 1.055l-.058.156-.219.056A4.031 4.031 0 0 0 .72 5.452a3.94 3.94 0 0 0 .23 3.13c.14.271.315.535.483.729l.12.139-.039.131a3.696 3.696 0 0 0-.159 1.133c0 .657.132 1.214.423 1.788a4.087 4.087 0 0 0 2.817 2.154c.49.1 1.106.116 1.516.039l.177-.033.214.201a4 4 0 0 0 1.561.935c.521.17.985.228 1.528.191 1.337-.092 2.469-.739 3.194-1.825.157-.236.244-.402.374-.718l.103-.249.111-.027a4.308 4.308 0 0 0 1.804-.94 4.082 4.082 0 0 0 1.24-2.16 3.994 3.994 0 0 0-.75-3.26c-.078-.1-.156-.2-.174-.225-.03-.042-.029-.06.03-.29.097-.378.128-.623.128-1.017 0-1.036-.386-1.985-1.132-2.78-.591-.63-1.53-1.096-2.445-1.214a5.048 5.048 0 0 0-1.183.022l-.179.034-.197-.19A4.116 4.116 0 0 0 8.645.125a4.586 4.586 0 0 0-1.26-.117Zm.872 1.098c.235.05.547.159.752.26.176.086.52.304.566.358.016.02-.373.25-1.648.975-.918.522-1.705.98-1.748 1.02a.593.593 0 0 0-.122.16c-.042.089-.043.109-.053 2.394l-.01 2.304-.64-.363c-.353-.2-.666-.379-.696-.398l-.055-.035V5.833c0-1.222.008-2.01.021-2.116a3.08 3.08 0 0 1 .588-1.466 3.82 3.82 0 0 1 .664-.642c.353-.247.856-.456 1.234-.513.09-.013.177-.027.193-.031.088-.021.815.01.954.04Zm3.819 1.232c1.554.275 2.64 1.657 2.514 3.198a2.432 2.432 0 0 1-.03.265c-.005.009-.615-.332-1.354-.756-2.133-1.222-2.065-1.185-2.171-1.2a.593.593 0 0 0-.185.01c-.051.013-.938.505-2.067 1.147a142.354 142.354 0 0 1-2.012 1.134c-.034.008-.036-.036-.036-.771 0-.718.003-.782.035-.81.068-.057 3.305-1.885 3.507-1.98.236-.11.552-.207.812-.246.285-.044.712-.04.986.01ZM3.63 7.971a.558.558 0 0 0 .133.16c.044.033.96.56 2.034 1.17a115.76 115.76 0 0 1 1.953 1.122c0 .027-1.333.77-1.38.77-.045 0-3.031-1.683-3.421-1.928a3.04 3.04 0 0 1-1.333-1.937 3.356 3.356 0 0 1 0-1.165c.095-.422.223-.728.439-1.045.36-.53.832-.905 1.452-1.154l.05-.02.011 1.963.01 1.965.052.099Zm8.7-2.226c1.896 1.08 1.735.985 1.947 1.146a2.955 2.955 0 0 1 1.169 2.35c0 .513-.097.927-.328 1.383a3.15 3.15 0 0 1-1.05 1.149c-.134.084-.54.29-.577.29-.008 0-.018-.875-.02-1.946l-.006-1.946-.047-.092a.654.654 0 0 0-.111-.153c-.036-.034-.952-.568-2.035-1.187-1.083-.62-1.98-1.137-1.995-1.15-.02-.018.123-.107.65-.406.371-.212.69-.384.708-.385.018 0 .781.426 1.695.947Zm-2.921.76.857.485v2.02l-.864.49c-.475.27-.871.494-.88.497a20.71 20.71 0 0 1-.896-.494l-.881-.5V6.995l.873-.497c.496-.283.886-.493.903-.487.017.006.416.228.888.495Zm2.259 1.29c.318.181.613.351.655.378l.076.048v1.947c0 2.075-.003 2.143-.102 2.53-.475 1.861-2.613 2.811-4.34 1.928-.205-.105-.555-.34-.54-.362.004-.008.758-.44 1.676-.962 1.097-.623 1.698-.975 1.752-1.028.162-.157.153-.003.153-2.575v-2.28l.046.023.624.353Zm-1.4 2.845v.797l-1.66.942c-.913.518-1.733.978-1.822 1.022a3.405 3.405 0 0 1-.742.247c-.183.04-.267.047-.598.047-.29 0-.429-.01-.558-.036-.982-.202-1.779-.814-2.193-1.683a2.683 2.683 0 0 1-.278-1.163c-.01-.278.01-.574.041-.604.005-.005.748.412 1.65.925.904.514 1.674.95 1.713.97a.511.511 0 0 0 .341.04c.062-.014.803-.425 2.095-1.16 1.1-.626 2.002-1.14 2.005-1.14.003-.001.005.357.005.796Z" clip-rule="evenodd"></path></g><defs><clipPath id="OpenAI_svg__a"><path fill="#fff" d="M.5 0h16v16H.5z"></path></clipPath></defs></svg>											
                            <?php echo e(__($fine_tune->name)); ?>

                        </h6>
                        <p class="text-muted"><?php echo e(__($fine_tune->description)); ?></p>
                        <p class="text-muted" style="position: absolute; bottom: 7px; opacity: 0.8; left: 0; right: 0; font-size: 9px;">
                            <?php if(auth()->user()->fine_tune_credits == -1): ?>
                                <?php echo e(__('Unlimited')); ?> <?php echo e(__('Words Available')); ?>

                            <?php elseif((auth()->user()->fine_tune_credits + auth()->user()->fine_tune_credits_prepaid) == 0): ?>
                                <?php echo e(__('No words left')); ?>. <a href="<?php echo e(route('user.plans')); ?>" class="text-primary font-weight-semibold"><?php echo e(__('Get More!')); ?></a>
                            <?php else: ?>
                                <?php echo e(App\Services\HelperService::userAvailableFineTuneWords()); ?> <?php echo e(__('Words Available')); ?>

                            <?php endif; ?> 
                        </p>
                    </label>
                </div>
            <?php endif; ?>													
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH G:\vijay\project\xampp\htdocs\chatboat_menia\resources\views/components/original-chat-models.blade.php ENDPATH**/ ?>