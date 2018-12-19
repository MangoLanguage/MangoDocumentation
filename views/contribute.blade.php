@extends('layouts.basic')

@section('content')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.2&appId=241375122865596&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>How to contribute?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <p>There are different ways to contribute into this language:</p>
                <ul>
                    <li>The language is nothing without the community, that means that we need as much people to know
                        about it, as much it is possible. So, here is a simple share button for Facebook:
                        <div class="fb-share-button mb-3" data-href="http://woo.zp.ua:8080/" data-layout="button_count" data-size="large" data-mobile-iframe="true">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwoo.zp.ua%3A8080%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Поделиться</a>
                        </div>
                    </li>
                    <li>
                        Provide help, which is necessary on current stage of our <a href="/road-map">road map</a>.
                    </li>
                    <li>
                        Contribute as a developer of <a href="https://github.com/MangoLanguage/Mango">Mango's core</a>
                        or suggest any improvement by <a href="https://github.com/MangoLanguage/Mango/issues">opening an issue</a>.
                    </li>
                    <li>
                        Improve Mango documentation by contributing our <a href="https://github.com/MangoLanguage/MangoDocumentation">documentation repo</a>.
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <div class="github-widget" data-username="MangoLanguage"></div>
                <script src="https://unpkg.com/github-card@1.2.1/dist/widget.js"></script>
            </div>
        </div>
    </div>
@endsection