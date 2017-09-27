<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="feedback text-center">
            <div class="feedback-header">
                <?Php if(isset($icon)) : echo $icon; endif; ?>
            </div>
            <div>
                <?Php if(isset($title)) : echo $title; endif; ?>
                <?Php if(isset($content)) : echo $content; endif;?>
                <div class="resend-link text-center">
                    <?Php if(isset($link)) : echo $link; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>