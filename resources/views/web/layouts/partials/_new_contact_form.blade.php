<div class="contact-doctor-form">
    <form class="row">
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="@lang('web.contact_form.name')">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="@lang('web.contact_form.email')">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control phoneInput number-only" placeholder="@lang('web.contact_form.number')">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="@lang('web.contact_form.message')"></textarea>
            </div>
        </div>
        <div class="col-lg-12">
            <button type="submit" class="default-btn active">
                @lang('web.contact_form.send_message')
            </button>
        </div>
    </form>
</div>
