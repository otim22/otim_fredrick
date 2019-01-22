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
                <img src="{{ asset('img/tools/atom.png') }}" alt="Atom icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://atom.io" target="_blank">Atom</a> <br />
                        An open source constantly updated, favourable and with turns of plugins.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/vscode.png') }}" alt="VS Code icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://code.visualstudio.com" target="_blank">VS Code</a> <br />
                        A source code editor developed by Microsoft for Windows, Linux and macOS.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/sublime.png') }}" alt="Sublime text icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://www.sublimetext.com" target="_blank">Sublime text</a> <br />
                        A proprietary cross-platform source code editor with a Python API.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/codepen.png') }}" alt="Codepen icon">
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
                <img src="{{ asset('img/tools/jsfiddle.png') }}" alt="JSFiddle icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://jsfiddle.net" target="_blank">JSFiddle</a> <br />
                        Similar to codepen though doesn't auto-update when you type. Hit Ctrl + E to run code.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/github.png') }}" alt="Git icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://github.com" target="_blank">Github</a> <br />
                        For version control and collaboration; working together on projects from anywhere.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/emmet.png') }}" alt="Emmet icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://docs.emmet.io/cheat-sheet" target="_blank">Emmet</a> <br />
                        A fundametal tool in making your life easier in writing html code.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/google.png') }}" alt="Google icon">
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
            <img src="{{ asset('img/html5/mdn.png') }}" alt="">
            <div class="content">
                <p class="heading-5">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5" target="_blank">HTML5 Referrence by MDN</a> <br />
                    Not all elements you should know to use then but know the referrence guide.
                </p>
            </div>
        </div>

        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/html-csheet.png') }}" alt="WP kube site">
            <div class="content">
                <p class="heading-5">
                    <a href="https://www.wpkube.com/html5-cheat-sheet" target="_blank">HTML5 Cheat Sheet</a> <br />
                    Helps you get get started we html5 elements including supported tags in html4.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/caniuse.png') }}" alt="Can i use icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://caniuse.com" target="_blank">HTML5 Elements Usuage</a> <br />
                    Helps to check for html elements browser usage across all platforms.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/html-css-tricks.png') }}" alt="html-css tricks icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://css-tricks.com/snippets/html" target="_blank">HTML-Css Tricks</a> <br />
                    Snippets of html code and examples elements usage in different areas.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/w3schools.jpeg') }}" alt="w3schools icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://www.w3schools.com" target="_blank">W3Schools</a> <br />
                    Free online school teaching coding from beginner to the most advanced level concepts.
                </p>
            </div>
        </div>

        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/khan-academy.png') }}" alt="Khan Academy icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://www.khanacademy.org" target="_blank">Khan Academy</a> <br />
                    A free online resource for learners in difference area of life with video and lots exercises.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/html5-orange.png') }}" alt="HTML5 doctor icon">
            <div class="content">
                <p class="heading-5">
                    <a href="http://html5doctor.com" target="_blank">Html5 Doctor</a> <br />
                    This is a html5 element index arranged in alphabetical order with code snippets illustrations.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/html5-black.jpeg') }}" alt="html5 icon">
            <div class="content">
                <p class="heading-5">
                    <a href="http://html5please.com" target="_blank">html5 Please</a> <br />
                    Look up to for elements to know if are ready or use them with polyfills, fallbacks or as they are.
                </p>
            </div>
        </div>
    </div>

    <div class="resource-title">
        <div class="row">
            <div class="content">
                <p class="heading-3 resource-title__heading">
                    Resources on css3
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/mdn.png') }}" alt="MDN icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference" target="_blank">CSS3 Referrence by MDN</a> <br />
                        Same as HTML5 not all elements you should know but  rather know the referrence guide.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/tutplus.png') }}" alt="Selectors envato icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://code.tutsplus.com/tutorials/the-30-css-selectors-you-must-memorize--net-16048" target="_blank">30 css selectors from envato</a> <br />
                        These 30 css selectors from envato tutplus  come very handy to use them.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/codrops.png') }}" alt="Sublime text icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://tympanus.net/codrops/css_reference" target="_blank">Codrops</a> <br />
                        From tutorials, playgrounds, Blueprints, to css referrence. Amazing resource worth more.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/caniuse.png') }}" alt="caniuse icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://caniuse.com" target="_blank">Can i use</a> <br />
                        Helps to check for css elements browser usage across all platforms.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/responsivegrid.png') }}" alt="responsivegrid icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://www.responsivegridsystem.com" target="_blank">Responsive Grid Syetem</a> <br />
                        A fluid, quick and easy grid for amazingly responsive web site design of your choice.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/flexbox.png') }}" alt="flexbox icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://flexbox.malven.co/" target="_blank">Flexbox Chear sheet</a> <br />
                        An interactive design, straight forward, easy cheat for flexbox style designs.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/animatecss.png') }}" alt="Animate icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://daneden.github.io/animate.css/" target="_blank">Animate.css</a> <br />
                        A simple css animation library that enables you to plugin animations gracefully.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/css-tricks.png') }}" alt="css-tricks icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://css-tricks.com/snippets/css" target="_blank">Css Tricks</a> <br />
                        Snippets of html code and examples elements usage in different areas.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/clippy.png') }}" alt="Clippy icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://bennettfeely.com/clippy/" target="_blank">Clippy</a> <br />
                        A tool that allows you make shapes in CSS by clipping with clip-path property.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/cubic.png') }}" alt="Cubic icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://cubic-bezier.com/#.17,.67,.83,.67" target="_blank">Cubic-bezier function generator </a> <br />
                        A transition effect generating  functions to use in CSS transitions and animations.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/easings.png') }}" alt="Easing icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://easings.net/" target="_blank">CSS easing functions </a> <br />
                        A number of easing functions that can used in CSS transitions and animations.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/w3schools.jpeg') }}" alt="W3school icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://www.w3schools.com/css" target="_blank">W3school</a> <br />
                        Free online school teaching coding from beginner to the most advanced level concepts.
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
                <img src="{{ asset('img/js/mdn.png') }}" alt="mdn icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference" target="_blank">JavaScript Reference by MDN</a> <br />
                        Another MDN reference on JavaScript and some cool advanced things.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/js/mdn.png') }}" alt="mdn icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Operator_Precedence" target="_blank">JavaScript Operator Precedence Table</a> <br />
                        Reference in which operators are parsed with respect to each other. Very handy.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/js/mdn.png') }}" alt="mdn icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/Events" target="_blank">JavaScript Event Reference</a> <br />
                        A List of all Document Object Model (DOM) events with explanations, beautifully categorized.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/js/hubspot.png') }}" alt="hubspot icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="http://youmightnotneedjquery.com" target="_blank">DOM Manipulation Reference</a> <br />
                        "You Might Not Need jQuery", Is how its called, a good DOM manipulation reference.
                    </p>
                </div>
            </div>
        </div>
    <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/js/es6-compat.png') }}" alt="es6-compat icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://kangax.github.io/compat-table/es6/" target="_blank">ES6 Browser Compatibility Table</a> <br />
                        Check out all the new ES2015/ES6 features supported by the most popular browsers.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/js/jspatterns.png') }}" alt="jspatterns icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://addyosmani.com/resources/essentialjsdesignpatterns/book/" target="_blank">JavaScript Design Patterns</a> <br />
                        Good reference for advanced developers to learn common JavaScript design patterns.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/js/github.png') }}" alt="Github icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://github.com/micromata/awesome-javascript-learning#articles--tutorials" target="_blank">Awesome Javascript Learning</a> <br />
                        A list of collection  of best JavaScript Learning Resources in one repository.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/js/github.png') }}" alt="github icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://github.com/rwaldron/idiomatic.js" target="_blank">Principles of Writing Good JavaScript</a> <br />
                        This is a good style guide to write better  quality  code. It's resourceful and a Reference.
                    </p>
                </div>
            </div>
        </div>

    <div class="resource-title">
        <div class="row">
            <div class="content mr">
                <p class="heading-3  resource-title__heading">
                    Fonts and Typography
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                    <img src="{{ asset('img/fonts/googlefonts.png') }}" alt="Google Fonts icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://fonts.google.com/" target="_blank">Google Fonts</a> <br />
                            The best resource for easy-to-use and open to use webfonts and has a variety fonts.
                        </p>
                    </div>
                </div>
            <div class="col-1-of-4">
                    <img src="{{ asset('img/fonts/fontspace.png') }}" alt="fontspace icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://www.fontspace.com" target="_blank">Font space</a> <br />
                            Collections of tens of thousand free fonts shared by designers around the world.
                        </p>
                    </div>
                </div>
            <div class="col-1-of-4">
                    <img src="{{ asset('img/fonts/creativebloq.jpeg') }}" alt="creativebloq icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://www.creativebloq.com/graphic-design-tips/best-free-fonts-for-designers-1233380" target="_blank">Best free fonts by Creative Bloq</a> <br />
                            Lots of free fonts for use from vintage-inspired typefaces to slab serifs, for varied projects.
                        </p>
                    </div>
                </div>
            <div class="col-1-of-4">
                    <img src="{{ asset('img/fonts/fontsquirrel.jpg') }}" alt="fontsquirrel icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://www.fontsquirrel.com" target="_blank">Fontsquirrel</a> <br />
                            You can use these fonts freely for commercial. There are incredible font library available.
                        </p>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="img/fonts/typeguide.svg" alt="A Pocket Guide svg">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://blog.teamtreehouse.com/23-essential-html-5-resources" target="_blank">A Pocket Guide to Typography</a> <br />
                        A guide to learn typography basics within a short period of time say 35 minutes.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/fonts/typetester.png') }}" alt="TypeTester  icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://www.typetester.org" target="_blank">TypeTester</a> <br />

                        One of the tool for web designers to test and compare over thousands of typefaces.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/fonts/fonts-behance.png') }}" alt="Behance icon">
                <div class="content">
                    <p class="heading-5">
                        <a href="https://www.behance.net/search?content=projects&sort=appreciations&time=week&search=fonts" target="_blank">Behance</a> <br />
                        Different font templates made by awesome graphic  and web designers.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                    <img src="{{ asset('img/fonts/myfonts.png') }}" alt="MyFonts icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://www.myfonts.com" target="_blank">MyFonts</a> <br />
                            This is a paid library of  fonts, if you need premium fonts for your next project check here.
                        </p>
                    </div>
                </div>
        </div>
    </div>

    <div class="row">
        <div class="content">
            <p class="heading-3  resource-title__heading">
                Myriad of Colors.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/materialpalette.jpg') }}" alt="Material icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://www.materialpalette.com" target="_blank">Material Palette</a> <br />
                    Derived inspiration from material design. Helps you generate and download your palette.
                </p>
            </div>
        </div>

        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/paletton.png') }}" alt="Paletton icon">
            <div class="content">
                <p class="heading-5">
                    <a href="http://paletton.com/#uid=1000u0kllllaFw0g0qFqFg0w0aF" target="_blank">Paletton</a> <br />
                    A  common color tool that allows you to create color combinations that match well together.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/flatuicolors.png') }}" alt="Sublime text icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://flatuicolors.com/" target="_blank">Flat UI Colors</a> <br />
                    If you want to use a flat ui color design then this is a good choice for you to checkout.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/uigradients.png') }}" alt="UI Gradients icon">
            <div class="content">
                <p class="heading-5">
                    <a href="https://uigradients.com" target="_blank">UI Gradients</a> <br />
                    Has turns of great color gradients to select from for your project to use.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
                <div class="col-1-of-4">
                    <img src="{{ asset('img/colors/colorhunt.gif') }}" alt="Colorhunt icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://colorhunt.co/" target="_blank">Colorhunt Palettes</a> <br />
                            Open platform for color inspiration with thousands of hand-picked color palettes.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <img src="{{ asset('img/colors/0to255.png') }}" alt="0to255 icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="http://www.0to255.com" target="_blank">0 to 255</a> <br />
                            Is a color tool for helping you find lighter and darker colors based on any color.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <img src="{{ asset('img/colors/coolors.png') }}" alt="Coolors icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://coolors.co/" target="_blank">Coolors</a> <br />
                            Helps you to be Creative with colors, storing them and sharing your palettes in short time.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <img src="{{ asset('img/colors/colourco.jpeg') }}" alt="Colourco icon">
                    <div class="content">
                        <p class="heading-5">
                            <a href="https://colourco.de/" target="_blank">Colourco</a> <br />
                            A colour scheme-mode with monochrome, analogy, complement, triad and quad.
                        </p>
                    </div>
                </div>
            </div>

    <div class="resource-title">
        <h1>Say</h1>
    </div>
    
    <h1>Say</h1>

    <div class="resource-title">
        <h1>Say</h1>
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
