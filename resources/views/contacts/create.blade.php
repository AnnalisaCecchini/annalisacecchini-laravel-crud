@extends('layouts.main')

@section('pagetitle')
    Contacts | Annalisa Cecchini
@endsection


@section('content')
    <section class="contacts container">
        <div class="contacts__left">
            <h1>Let's get in touch!</h1>
            <h3 class="tc-titles mt-2">I will be more than happy to take some time to discuss together.</h3>
            <p class="mt-1 h3">Leave here your message, or send me and email at: <a class="t-unline tc-bold" href="mailto:annalisacecchini.dev@gmail.com">annalisacecchini.dev@gmail.com</a></p>
            <h4 class="mt-2">Or
                <a class="cta__link tc-active t-upper t-unline" href="{{ route('download') }}">download resume</a>
            </h4>
        </div>
        <div class="contacts__right mt-4">
            <form action="{{ route('contacts.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label class="form__label" for="name">Name <span  class="form__label--required">(required)</span></label>
                    @if ($errors->has('name')) 
                        <p class="form__label--alert">Please, enter your name!</p>
                    @endif
                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label class="form__label" for="lastname">Lastname <span  class="form__label--required">(required)</span></label>
                    @if ($errors->has('lastname')) 
                        <p class="form__label--alert">Please, enter your lastname!</p>
                    @endif
                    <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}">
                </div>
                <div class="form-group">
                    <label class="form__label" for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
                </div>
                <div class="form-group">
                    <label class="form__label" for="email">E-mail <span class="form__label--required">(required)</span></label>
                    @if ($errors->has('email')) 
                        <p class="form__label--alert">Please, enter your e-mail address!</p>
                    @endif
                    <input type="text" name="email" id="email" value="{{ old('email') }}">
                </div>
                <div  class="form-group">
                    <label class="form__label" for="message">Message <span  class="form__label--required">(required)</span></label>
                    @if ($errors->has('message')) 
                        <p class="form__label--alert">Please, enter your message!</p>
                    @endif
                    <textarea name="message" id="message" cols="30" rows="10">{{ old('message') }}</textarea>
                </div>
                <a href="https://www.iubenda.com/privacy-policy/56238725" class="iubenda-white iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
                <div class="form-group__checkbox">
                    @if ($errors->has('terms')) 
                        <p class="form__label--alert">Please, confirm terms for Privacy Policy!</p>
                    @endif
                    <input type="checkbox" name="terms" id="terms">
                    <label for="terms">I Agree to Privacy Policy
                        <span class="form__label--required">(required)</span>
                    </label>                   
    
                </div>
                    
                {{-- SUBMIT --}}
                <div class="form-group__submit">
                    <input class="btn btn__primary btn__primary--form" type="submit" value="Send Message!">
                </div>
            </form>
        </div>
    </section>
@endsection