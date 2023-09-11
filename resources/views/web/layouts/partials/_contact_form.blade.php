<div class="contact-form">
    <form method="POST" action="https://crm.zoho.com/crm/WebToLeadForm" name="WebToLeads5091655000000385400">
        <input type="hidden" name="xnQsjsdp" value="6ef525507206f36392f5a0f48bde164dc3de78345d86f03be239e280baf49927" />
        <input type="hidden" name="zc_gad" value="" />
        <input type="hidden" name="xmIwtLD" value="66c13862cbf7157d10b7556b9cb8f784bcbcc81dc217bcca6728e3bef15a4a04" />
        <input type="hidden" name="actionType" value="TGVhZHM=" />
        <input type="hidden" name="returnURL" value="{{ url()->current() }}" />
        <input type="hidden" name="LEADCF2" value="{{ __('messages.languages.' . app()->getLocale() . '.title') }}" />
        <input type="hidden" name="Lead Source" value="Website" />

        @if (isset($type) && $type == 'landing')
            <!-- UTM Source -->
            <input type="hidden" name="LEADCF10" maxlength="255" value="{{ request()->get('utm_source') }}" />
            <!-- UTM Medium -->
            <input type="hidden" name="LEADCF12" maxlength="255" value="{{ request()->get('utm_medium') }}" />
            <!-- UTM Campaign -->
            <input type="hidden" name="LEADCF11" maxlength="255" value="{{ request()->get('utm_campaign') }}" />
            <!-- UTM Term -->
            <input type="hidden" name="LEADCF13" maxlength="255" value="{{ request()->get('utm_term') }}" />
        @endif

        <div class="form-group">
            <span class="icon flaticon-user-2"></span>
            <input type="text" name="Last Name" placeholder="@lang('web.contact_form.name')" required>
        </div>
        <div class="form-group">
            <span class="icon flaticon-send"></span>
            <input type="email" name="Email" placeholder="@lang('web.contact_form.email')">
        </div>
        <div class="form-group">
            <input type="tel" class="phoneInput number-only" placeholder="@lang('web.contact_form.number')" required>
        </div>
        <div class="form-group comment-group">
            <span class="icon icon-comments"></span>
            <textarea name="Description" placeholder="@lang('web.contact_form.message')"></textarea>
        </div>
        <div class="form-group">
            <div class='g-recaptcha' data-sitekey='6Le21QEhAAAAAJgPaS5aMvSRVQYwYJnEd-HCfqqp' data-theme='light'
                data-callback='rccallback5091655000000385400' captcha-verified='false' id='recap5091655000000385400'>
            </div>
            <div id='recapErr5091655000000385400' style='font-size:12px;color:red;visibility:hidden;'>@lang('web.contact_form.captcha_validation_faild')
            </div>
        </div>
        <div class="form-group">
            <button class="theme-btn submit-btn" type="submit" name="submit-form">
                @lang('web.contact_form.submit_now')
            </button>
        </div>
    </form>
</div>
