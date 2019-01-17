@extends('layouts.default')

@section('content')

<section class="section-resources">

    <div class="resources-header">
        <div class="row resources-header__row">
            <p class="heading-4">
            Lorem ipsum dolor sit amet, an his etiam torquatos.
            Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur.
            Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
            </p>
        </div>
    </div>

    <div class="resource-title">
        <div class="row">
            <div class="content">
                <p class="heading-3 resource-title__heading">
                    Development tools.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/atom.png') }}" alt="Atom icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://atom.io" target="_blank">Atom</a> <br />
                        An open source constantly updated, favourable and with turns of plugins.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/vscode.png') }}" alt="VS Code icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://code.visualstudio.com" target="_blank">VS Code</a> <br />
                        A source code editor developed by Microsoft for Windows, Linux and macOS.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/sublime.png') }}" alt="Sublime text icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://www.sublimetext.com" target="_blank">Sublime text</a> <br />
                        A proprietary cross-platform source code editor with a Python API.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/codepen.png') }}" alt="Codepen icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://codepen.io" target="_blank">Codepen</a> <br />
                        Online grounds for HTML, CSS, and Javascript. Liveview and automatic updates.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/jsfiddle.png') }}" alt="JSFiddle icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://jsfiddle.net" target="_blank">JSFiddle</a> <br />
                        Similar to codepen though doesn't auto-update when you type. Hit Ctrl + E to run code.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/github.png') }}" alt="Git icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://github.com" target="_blank">Github</a> <br />
                        For version control and collaboration; working together on projects from anywhere.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/emmet.png') }}" alt="Emmet icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://docs.emmet.io/cheat-sheet" target="_blank">Emmet</a> <br />
                        A fundametal tool in making your life easier in writing html code.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/google.png') }}" alt="Google icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://google.com" target="_blank">Google</a> <br />
                        A world wide web search engine, have it under your belt and count your worries gone.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="content mr">
            <p class="heading-3 resource-title__heading">
                Resources on html5
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="{{ asset('img/atom.png') }}" alt="Atom icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://atom.io" target="_blank">Atom</a> <br />
                    An open source constantly updated, favourable and with turns of plugins.
                </p>
            </div>
        </div>

        <div class="col-1-of-4">
            <img src="{{ asset('img/vscode.png') }}" alt="VS Code icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://code.visualstudio.com" target="_blank">VS Code</a> <br />
                    A source code editor developed by Microsoft for Windows, Linux and macOS.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/sublime.png') }}" alt="Sublime text icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://www.sublimetext.com" target="_blank">Sublime text</a> <br />
                    A proprietary cross-platform source code editor with a Python API.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/codepen.png') }}" alt="Codepen icon">
            <div class="content">
                <p class="heading-5">
                    <a href="http://codepen.io" target="_blank">Codepen</a> <br />
                    Online grounds for HTML, CSS, and Javascript. Liveview and automatic updates.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="{{ asset('img/jsfiddle.png') }}" alt="JSFiddle icon">
            <div class="content">
                <p class="heading-5">
                    <a href="http://jsfiddle.net" target="_blank">JSFiddle</a> <br />
                    Similar to codepen though doesn't auto-update when you type. Hit Ctrl + E to run code.
                </p>
            </div>
        </div>

        <div class="col-1-of-4">
            <img src="{{ asset('img/github.png') }}" alt="Git icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://github.com" target="_blank">Github</a> <br />
                    For version control and collaboration; working together on projects from anywhere.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/emmet.png') }}" alt="Emmet icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://docs.emmet.io/cheat-sheet" target="_blank">Emmet</a> <br />
                    A fundametal tool in making your life easier in writing html code.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/google.png') }}" alt="Google icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://google.com" target="_blank">Google</a> <br />
                    A world wide web search engine, have it under your belt and count your worries gone.
                </p>
            </div>
        </div>
    </div>

    <div class="resource-title">
        <div class="row">
            <div class="content">
                <p class="heading-3 resource-title__heading">
                    Resources on css
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/atom.png') }}" alt="Atom icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://atom.io" target="_blank">Atom</a> <br />
                        An open source constantly updated, favourable and with turns of plugins.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/vscode.png') }}" alt="VS Code icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://code.visualstudio.com" target="_blank">VS Code</a> <br />
                        A source code editor developed by Microsoft for Windows, Linux and macOS.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/sublime.png') }}" alt="Sublime text icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://www.sublimetext.com" target="_blank">Sublime text</a> <br />
                        A proprietary cross-platform source code editor with a Python API.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/codepen.png') }}" alt="Codepen icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://codepen.io" target="_blank">Codepen</a> <br />
                        Online grounds for HTML, CSS, and Javascript. Liveview and automatic updates.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/jsfiddle.png') }}" alt="JSFiddle icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://jsfiddle.net" target="_blank">JSFiddle</a> <br />
                        Similar to codepen though doesn't auto-update when you type. Hit Ctrl + E to run code.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/github.png') }}" alt="Git icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://github.com" target="_blank">Github</a> <br />
                        For version control and collaboration; working together on projects from anywhere.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/emmet.png') }}" alt="Emmet icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://docs.emmet.io/cheat-sheet" target="_blank">Emmet</a> <br />
                        A fundametal tool in making your life easier in writing html code.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/google.png') }}" alt="Google icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://google.com" target="_blank">Google</a> <br />
                        A world wide web search engine, have it under your belt and count your worries gone.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="content mr">
            <p class="heading-3 resource-title__heading">
                Resources on javascript.
            </p>
        </div>
    </div>
    <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/atom.png') }}" alt="Atom icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://atom.io" target="_blank">Atom</a> <br />
                        An open source constantly updated, favourable and with turns of plugins.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/vscode.png') }}" alt="VS Code icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://code.visualstudio.com" target="_blank">VS Code</a> <br />
                        A source code editor developed by Microsoft for Windows, Linux and macOS.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/sublime.png') }}" alt="Sublime text icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://www.sublimetext.com" target="_blank">Sublime text</a> <br />
                        A proprietary cross-platform source code editor with a Python API.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/codepen.png') }}" alt="Codepen icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://codepen.io" target="_blank">Codepen</a> <br />
                        Online grounds for HTML, CSS, and Javascript. Liveview and automatic updates.
                    </p>
                </div>
            </div>
        </div>
    <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/jsfiddle.png') }}" alt="JSFiddle icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://jsfiddle.net" target="_blank">JSFiddle</a> <br />
                        Similar to codepen though doesn't auto-update when you type. Hit Ctrl + E to run code.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/github.png') }}" alt="Git icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://github.com" target="_blank">Github</a> <br />
                        For version control and collaboration; working together on projects from anywhere.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/emmet.png') }}" alt="Emmet icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://docs.emmet.io/cheat-sheet" target="_blank">Emmet</a> <br />
                        A fundametal tool in making your life easier in writing html code.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/google.png') }}" alt="Google icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://google.com" target="_blank">Google</a> <br />
                        A world wide web search engine, have it under your belt and count your worries gone.
                    </p>
                </div>
            </div>
        </div>

    <div class="resource-title">
        <div class="row">
            <div class="content">
                <p class="heading-3 resource-title__heading">
                    Frameworks.
                </p>
            </div>
        </div>
        <div class="row">
                <div class="col-1-of-4">
                    <img src="{{ asset('img/atom.png') }}" alt="Atom icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://atom.io" target="_blank">Atom</a> <br />
                            An open source constantly updated, favourable and with turns of plugins.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <img src="{{ asset('img/vscode.png') }}" alt="VS Code icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://code.visualstudio.com" target="_blank">VS Code</a> <br />
                            A source code editor developed by Microsoft for Windows, Linux and macOS.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <img src="{{ asset('img/sublime.png') }}" alt="Sublime text icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://www.sublimetext.com" target="_blank">Sublime text</a> <br />
                            A proprietary cross-platform source code editor with a Python API.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <img src="{{ asset('img/codepen.png') }}" alt="Codepen icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="http://codepen.io" target="_blank">Codepen</a> <br />
                            Online grounds for HTML, CSS, and Javascript. Liveview and automatic updates.
                        </p>
                    </div>
                </div>
            </div>
        <div class="row">
                <div class="col-1-of-4">
                    <img src="{{ asset('img/jsfiddle.png') }}" alt="JSFiddle icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="http://jsfiddle.net" target="_blank">JSFiddle</a> <br />
                            Similar to codepen though doesn't auto-update when you type. Hit Ctrl + E to run code.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <img src="{{ asset('img/github.png') }}" alt="Git icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://github.com" target="_blank">Github</a> <br />
                            For version control and collaboration; working together on projects from anywhere.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <img src="{{ asset('img/emmet.png') }}" alt="Emmet icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://docs.emmet.io/cheat-sheet" target="_blank">Emmet</a> <br />
                            A fundametal tool in making your life easier in writing html code.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <img src="{{ asset('img/google.png') }}" alt="Google icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://google.com" target="_blank">Google</a> <br />
                            A world wide web search engine, have it under your belt and count your worries gone.
                        </p>
                    </div>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="content mr">
            <p class="heading-3  resource-title__heading">
                Fonts and Typography
            </p>
        </div>
    </div>
    <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/atom.png') }}" alt="Atom icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://atom.io" target="_blank">Atom</a> <br />
                        An open source constantly updated, favourable and with turns of plugins.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/vscode.png') }}" alt="VS Code icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://code.visualstudio.com" target="_blank">VS Code</a> <br />
                        A source code editor developed by Microsoft for Windows, Linux and macOS.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/sublime.png') }}" alt="Sublime text icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://www.sublimetext.com" target="_blank">Sublime text</a> <br />
                        A proprietary cross-platform source code editor with a Python API.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/codepen.png') }}" alt="Codepen icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://codepen.io" target="_blank">Codepen</a> <br />
                        Online grounds for HTML, CSS, and Javascript. Liveview and automatic updates.
                    </p>
                </div>
            </div>
        </div>
    <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/jsfiddle.png') }}" alt="JSFiddle icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://jsfiddle.net" target="_blank">JSFiddle</a> <br />
                        Similar to codepen though doesn't auto-update when you type. Hit Ctrl + E to run code.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/github.png') }}" alt="Git icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://github.com" target="_blank">Github</a> <br />
                        For version control and collaboration; working together on projects from anywhere.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/emmet.png') }}" alt="Emmet icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://docs.emmet.io/cheat-sheet" target="_blank">Emmet</a> <br />
                        A fundametal tool in making your life easier in writing html code.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/google.png') }}" alt="Google icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://google.com" target="_blank">Google</a> <br />
                        A world wide web search engine, have it under your belt and count your worries gone.
                    </p>
                </div>
            </div>
        </div>

    <div class="resource-title">
        <div class="row">
            <div class="content">
                <p class="heading-3  resource-title__heading">
                    Myriad of Colors.
                </p>
            </div>
        </div>
        <div class="row">
                <div class="col-1-of-4">
                    <img src="{{ asset('img/atom.png') }}" alt="Atom icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://atom.io" target="_blank">Atom</a> <br />
                            An open source constantly updated, favourable and with turns of plugins.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <img src="{{ asset('img/vscode.png') }}" alt="VS Code icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://code.visualstudio.com" target="_blank">VS Code</a> <br />
                            A source code editor developed by Microsoft for Windows, Linux and macOS.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <img src="{{ asset('img/sublime.png') }}" alt="Sublime text icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://www.sublimetext.com" target="_blank">Sublime text</a> <br />
                            A proprietary cross-platform source code editor with a Python API.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <img src="{{ asset('img/codepen.png') }}" alt="Codepen icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="http://codepen.io" target="_blank">Codepen</a> <br />
                            Online grounds for HTML, CSS, and Javascript. Liveview and automatic updates.
                        </p>
                    </div>
                </div>
            </div>
        <div class="row">
                <div class="col-1-of-4">
                    <img src="{{ asset('img/jsfiddle.png') }}" alt="JSFiddle icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="http://jsfiddle.net" target="_blank">JSFiddle</a> <br />
                            Similar to codepen though doesn't auto-update when you type. Hit Ctrl + E to run code.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <img src="{{ asset('img/github.png') }}" alt="Git icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://github.com" target="_blank">Github</a> <br />
                            For version control and collaboration; working together on projects from anywhere.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <img src="{{ asset('img/emmet.png') }}" alt="Emmet icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://docs.emmet.io/cheat-sheet" target="_blank">Emmet</a> <br />
                            A fundametal tool in making your life easier in writing html code.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <img src="{{ asset('img/google.png') }}" alt="Google icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://google.com" target="_blank">Google</a> <br />
                            A world wide web search engine, have it under your belt and count your worries gone.
                        </p>
                    </div>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="row subcription__row">
            <h1 class="heading-3 mb-sm">Stay tune for updates</h1>
            <h1 class="heading-5 mb-lg">Inspiring and thoughtful emails only.</h1>
            <form action="#" class="subcription__menu">
                <input type="email" class="subcription__menu-input" placeholder="name@example.com">
                <button class="subcription__menu-button">
                    Subcribe
                </button>
            </form>
        </div>
    </div>
</section>

@stop
