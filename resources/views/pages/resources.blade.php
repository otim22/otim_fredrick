@extends('layouts.default')

@section('content')

<section class="section-resources">

    <div class="resources-header">
        <div class="row resources-header__row">
            <p class="resources-header__par">
                From Tools, Html5, Css3, JavaScript, and
                more through to Testing, Optimization and Deployment
                Resources all put in one place. And it's Here!!
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
                <div class="content">
                    <img src="{{ asset('img/tools/atom.png') }}" class="content-img" alt="Atom icon">
                    <p class="heading-5 content-resource content-resource">
                        <a href="https://atom.io" class="content-link" target="_blank">Atom</a> <br /><br />
                        An open source constantly updated, favourable and with turns of plugins.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/vscode.png') }}"  class="content-img" alt="VS Code icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://code.visualstudio.com" class="content-link" target="_blank">VS Code</a> <br /><br />
                        A source code editor developed by Microsoft for Windows, Linux and macOS.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/sublime.png') }}"  class="content-img" alt="Sublime text icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.sublimetext.com" class="content-link" target="_blank">Sublime Text</a> <br /><br />
                        A proprietary cross-platform source code editor with a Python API.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/codepen.png') }}"  class="content-img" alt="Codepen icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://codepen.io" class="content-link" target="_blank">Codepen</a> <br /><br />
                        Online grounds for HTML, CSS, and Javascript. Liveview and automatic updates.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/jsfiddle.png') }}"  class="content-img" alt="JSFiddle icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://jsfiddle.net" class="content-link" target="_blank">JSFiddle</a> <br /><br />
                        Similar to codepen though doesn't auto-update when you type. Hit Ctrl + E to run code.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/github.png') }}"  class="content-img" alt="Git icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://github.com" class="content-link" target="_blank">Github</a> <br /><br />
                        For version control and collaboration; working together on projects from anywhere.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/emmet.png') }}"  class="content-img" alt="Emmet icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://docs.emmet.io/cheat-sheet" class="content-link" target="_blank">Emmet</a> <br /><br />
                        A fundametal tool in making your life easier in writing html code.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/tools/google.png') }}"  class="content-img" alt="Google icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://google.com" class="content-link" target="_blank">Google</a> <br /> <br />
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
            <img src="{{ asset('img/html5/mdn.png') }}"  class="content-img" alt="mdn icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5" class="content-link" target="_blank">HTML5 Referrence By MDN</a> <br /> <br />
                    Not all elements you should know to use then but know the referrence guide.
                </p>
            </div>
        </div>

        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/html-csheet.png') }}"  class="content-img" alt="WP kube site">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://www.wpkube.com/html5-cheat-sheet" class="content-link" target="_blank">HTML5 Cheat Sheet</a> <br /> <br />
                    Helps you get get started we html5 elements including supported tags in html4.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/caniuse.png') }}"  class="content-img" alt="Can i use icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://caniuse.com" class="content-link" target="_blank">HTML5 Elements Usuage</a> <br /> <br />
                    Helps to check for html elements browser usage across all platforms.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/html-css-tricks.png') }}"  class="content-img" alt="html-css tricks icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://css-tricks.com/snippets/html" class="content-link" target="_blank">HTML-CSS Tricks</a> <br /> <br />
                    Snippets of html code and examples elements usage in different areas.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/w3schools.jpeg') }}"  class="content-img" alt="w3schools icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://www.w3schools.com" class="content-link" target="_blank">W3Schools</a> <br /> <br />
                    Free online school teaching coding from beginner to the most advanced level concepts.
                </p>
            </div>
        </div>

        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/khan-academy.png') }}"  class="content-img" alt="Khan Academy icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://www.khanacademy.org" class="content-link" target="_blank">Khan Academy</a> <br /> <br />
                    A free online resource for learners in difference area of life with video and lots exercises.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/html5-orange.png') }}"  class="content-img" alt="HTML5 doctor icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="http://html5doctor.com" class="content-link" target="_blank">HTML5 Doctor</a> <br /> <br />
                    This is a html5 element index arranged in alphabetical order with code snippets illustrations.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/html5/html5-black.jpeg') }}"  class="content-img" alt="html5 icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="http://html5please.com" class="content-link" target="_blank">HTML5 Please</a> <br /> <br />
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
                <img src="{{ asset('img/css3/mdn.png') }}"  class="content-img" alt="MDN icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference" class="content-link" target="_blank">CSS3 Referrence By MDN</a> <br /> <br />
                        Same as HTML5 not all elements you should know but  rather know the referrence guide.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/tutplus.png') }}"  class="content-img" alt="Selectors envato icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://code.tutsplus.com/tutorials/the-30-css-selectors-you-must-memorize--net-16048" class="content-link" target="_blank">30 CSS selectors from envato</a> <br /> <br />
                        These 30 css selectors from envato tutplus  come very handy to use them.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/codrops.png') }}"  class="content-img" alt="Sublime text icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://tympanus.net/codrops/css_reference" class="content-link" target="_blank">Codrops</a> <br /> <br />
                        From tutorials, playgrounds, Blueprints, to css referrence. Amazing resource worth more.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/caniuse.png') }}"  class="content-img" alt="caniuse icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://caniuse.com" class="content-link" target="_blank">Can i use</a> <br /> <br />
                        Helps to check for css elements browser usage across all platforms.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/responsivegrid.png') }}"  class="content-img" alt="responsivegrid icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://www.responsivegridsystem.com" class="content-link" target="_blank">Responsive Grid System</a> <br /> <br />
                        A fluid, quick and easy grid for amazingly responsive web site design of your choice.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/flexbox.png') }}"  class="content-img" alt="flexbox icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://flexbox.malven.co/" class="content-link" target="_blank">Flexbox Chear Sheet</a> <br /> <br />
                        An interactive design, straight forward, easy cheat for flexbox style designs.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/animatecss.png') }}"  class="content-img" alt="Animate icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://daneden.github.io/animate.css/" class="content-link" target="_blank">Animate.css</a> <br /> <br />
                        A simple css animation library that enables you to plugin animations gracefully.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/css-tricks.png') }}"  class="content-img" alt="css-tricks icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://css-tricks.com/snippets/css" class="content-link" target="_blank">CSS Tricks</a> <br /> <br />
                        Snippets of html code and examples elements usage in different areas.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/clippy.png') }}"  class="content-img" alt="Clippy icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://bennettfeely.com/clippy/" class="content-link" target="_blank">Clippy</a> <br /> <br />
                        A tool that allows you make shapes in CSS by clipping with clip-path property.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/cubic.png') }}"  class="content-img" alt="Cubic icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://cubic-bezier.com/#.17,.67,.83,.67" class="content-link" target="_blank">Cubic-bezier function generator </a> <br /> <br />
                        A transition effect generating  functions to use in CSS transitions and animations.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/easings.png') }}"  class="content-img" alt="Easing icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://easings.net/" class="content-link" target="_blank">CSS easing functions </a> <br /> <br />
                        A number of easing functions that can used in CSS transitions and animations.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/css3/w3schools.jpeg') }}"  class="content-img" alt="W3school icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.w3schools.com/css" class="content-link" target="_blank">W3school</a> <br /> <br />
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
                <img src="{{ asset('img/js/mdn.png') }}"  class="content-img" alt="mdn icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference" class="content-link" target="_blank">JavaScript Reference By MDN</a> <br /><br />
                        Another MDN reference on JavaScript and some cool advanced things.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/js/mdn.png') }}"  class="content-img" alt="mdn icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Operator_Precedence" class="content-link" target="_blank">JavaScript Operator Precedence Table</a> <br /><br />
                        Reference in which operators are parsed with respect to each other. Very handy.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/js/mdn.png') }}"  class="content-img" alt="mdn icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/Events" class="content-link" target="_blank">JavaScript Event Reference</a> <br /><br />
                        A List of all Document Object Model (DOM) events with explanations, beautifully categorized.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/js/hubspot.png') }}"  class="content-img" alt="hubspot icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://youmightnotneedjquery.com" class="content-link" target="_blank">DOM Manipulation Reference</a> <br /><br />
                        "You Might Not Need jQuery", Is how its called, a good DOM manipulation reference.
                    </p>
                </div>
            </div>
        </div>
    <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/js/es6-compat.png') }}"  class="content-img" alt="es6-compat icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://kangax.github.io/compat-table/es6/" class="content-link" target="_blank">ES6 Browser Compatibility Table</a> <br /><br />
                        Check out all the new ES2015/ES6 features supported by the most popular browsers.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/js/jspatterns.png') }}"  class="content-img" alt="jspatterns icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://addyosmani.com/resources/essentialjsdesignpatterns/book/" class="content-link" target="_blank">JavaScript Design Patterns</a> <br /><br />
                        Good reference for advanced developers to learn common JavaScript design patterns.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/js/github.png') }}"  class="content-img" alt="Github icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://github.com/micromata/awesome-javascript-learning#articles--tutorials" class="content-link" target="_blank">Awesome Javascript Learning</a> <br /><br />
                        A list of collection  of best JavaScript Learning Resources in one repository.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/js/github.png') }}"  class="content-img" alt="github icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://github.com/rwaldron/idiomatic.js" class="content-link" target="_blank">Principles of Writing Good JavaScript</a> <br /><br />
                        This is a good style guide to write better  quality  code. It's resourceful and a Reference.
                    </p>
                </div>
            </div>
        </div>

    <div class="resource-title">
        <div class="row">
            <div class="content">
                <p class="heading-3  resource-title__heading">
                    Fonts and Typography
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                    <img src="{{ asset('img/fonts/googlefonts.png') }}"  class="content-img" alt="Google Fonts icon">
                    <div class="content">
                        <p class="heading-5 content-resource">
                            <a href="https://fonts.google.com/" class="content-link" target="_blank">Google Fonts</a> <br /><br />
                            The best resource for easy-to-use and open to use webfonts and has a variety fonts.
                        </p>
                    </div>
                </div>
            <div class="col-1-of-4">
                    <img src="{{ asset('img/fonts/fontspace.png') }}"  class="content-img" alt="fontspace icon">
                    <div class="content">
                        <p class="heading-5 content-resource">
                            <a href="https://www.fontspace.com" class="content-link" target="_blank">Font Space</a> <br /><br />
                            Collections of tens of thousand free fonts shared by designers around the world.
                        </p>
                    </div>
                </div>
            <div class="col-1-of-4">
                    <img src="{{ asset('img/fonts/creativebloq.jpeg') }}"  class="content-img" alt="creativebloq icon">
                    <div class="content">
                        <p class="heading-5 content-resource">
                            <a href="https://www.creativebloq.com/graphic-design-tips/best-free-fonts-for-designers-1233380" class="content-link" target="_blank">Fonts By Creative Bloq</a> <br /><br />
                            Lots of free fonts for use from vintage-inspired typefaces to slab serifs, for varied projects.
                        </p>
                    </div>
                </div>
            <div class="col-1-of-4">
                    <img src="{{ asset('img/fonts/fontsquirrel.jpg') }}"  class="content-img" alt="fontsquirrel icon">
                    <div class="content">
                        <p class="heading-5 content-resource">
                            <a href="https://www.fontsquirrel.com" class="content-link" target="_blank">Fontsquirrel</a> <br /><br />
                            You can use these fonts freely for commercial. There are incredible font library available.
                        </p>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="img/fonts/typeguide.svg"  class="content-img" alt="A Pocket Guide svg">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://blog.teamtreehouse.com/23-essential-html-5-resources" class="content-link" target="_blank">A Guide To Typography</a> <br /><br />
                        A pocket guide to learn typography basics within a short period of time say 35 minutes.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/fonts/typetester.png') }}"  class="content-img" alt="TypeTester  icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.typetester.org" class="content-link" target="_blank">TypeTester</a> <br /><br />

                        One of the tool for web designers to test and compare over thousands of typefaces.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <img src="{{ asset('img/fonts/fonts-behance.png') }}"  class="content-img" alt="Behance icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.behance.net/search?content=projects&sort=appreciations&time=week&search=fonts" class="content-link" target="_blank">Behance</a> <br /><br />
                        Different font templates made by awesome graphic  and web designers.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                    <img src="{{ asset('img/fonts/myfonts.png') }}"  class="content-img" alt="MyFonts icon">
                    <div class="content">
                        <p class="heading-5 content-resource">
                            <a href="https://www.myfonts.com" class="content-link" target="_blank">MyFonts</a> <br /><br />
                            This is a paid library of  fonts, if you need premium fonts for your next project check here.
                        </p>
                    </div>
                </div>
        </div>
    </div>

    <div class="row">
        <div class="content mr">
            <p class="heading-3  resource-title__heading">
                Myriad of Colors.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/materialpalette.jpg') }}"  class="content-img" alt="Material icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://www.materialpalette.com" class="content-link" target="_blank">Material Palette</a> <br /><br />
                    Derived inspiration from material design. Helps you generate and download your palette.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/paletton.png') }}"  class="content-img" alt="Paletton icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="http://paletton.com/#uid=1000u0kllllaFw0g0qFqFg0w0aF" class="content-link" target="_blank">Paletton</a> <br /><br />
                    A  common color tool that allows you to create color combinations that match well together.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/flatuicolors.png') }}"  class="content-img" alt="Sublime text icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://flatuicolors.com/" class="content-link" target="_blank">Flat UI Colors</a> <br /><br />
                    If you want to use a flat ui color design then this is a good choice for you to checkout.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/uigradients.png') }}"  class="content-img" alt="UI Gradients icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://uigradients.com" class="content-link" target="_blank">UI Gradients</a> <br /><br />
                    Has turns of great color gradients to select from for your project to use.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/colorhunt.gif') }}"  class="content-img" alt="Colorhunt icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://colorhunt.co/" class="content-link" target="_blank">Colorhunt Palettes</a> <br /><br />
                    Open platform for color inspiration with thousands of hand-picked color palettes.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/0to255.png') }}"  class="content-img" alt="0to255 icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="http://www.0to255.com" class="content-link" target="_blank">0 to 255</a> <br /><br />
                    Is a color tool for helping you find lighter and darker colors based on any color.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/coolors.png') }}"  class="content-img" alt="Coolors icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://coolors.co/" class="content-link" target="_blank">Coolors</a> <br /><br />
                    Helps you to be Creative with colors, storing them and sharing your palettes in short time.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/colors/colourco.jpeg') }}"  class="content-img" alt="Colourco icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://colourco.de/" class="content-link" target="_blank">Colourco</a> <br /><br />
                    A colour scheme-mode with monochrome, analogy, complement, triad and quad.
                </p>
            </div>
        </div>
    </div>

    <div class="resource-title">
        <div class="row">
            <div class="content">
                <p class="heading-3  resource-title__heading">
                    Images and Videos
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                    <img src="{{ asset('img/images/thestocks.jpg') }}"  class="content-img" alt="The Stocks icon">
                    <div class="content">
                        <p class="heading-5 content-resource">
                            <a href="http://thestocks.im" class="content-link" target="_blank">The Stocks</a> <br /><br />
                            It has royalty of free stock photos from different resources in one place.
                        </p>
                    </div>
                </div>
            <div class="col-1-of-4">
                    <img src="{{ asset('img/images/pixaby.png') }}"  class="content-img" alt="pixaby icon">
                    <div class="content">
                        <p class="heading-5 content-resource">
                            <a href="https://pixabay.com" class="content-link" target="_blank">Pixaby</a> <br /><br />
                            From photos to vectors and art illustrations all for free to use by someone.
                        </p>
                    </div>
                </div>
            <div class="col-1-of-4">
                    <img src="{{ asset('img/images/subtlepatterns.png') }}"  class="content-img" alt="subtlepatterns icon">
                    <div class="content">
                        <p class="heading-5 content-resource">
                            <a href="https://www.toptal.com/designers/subtlepatterns/" class="content-link" target="_blank">Subtle Patterns</a> <br /><br />
                            Top quality  tilable textured patterns resource, all for free to use.
                        </p>
                    </div>
                </div>
            <div class="col-1-of-4">
                    <img src="{{ asset('img/images/canva.png') }}"  class="content-img" alt="canva icon">
                    <div class="content">
                        <p class="heading-5 content-resource">
                            <a href="https://www.canva.com" class="content-link" target="_blank">Canva</a> <br /><br />
                            You can create anything and professional layouts. And publish anywhere.
                        </p>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/images/unsplash.svg') }}"  class="content-img" alt="unsplash svg">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://unsplash.com" class="content-link" target="_blank">Unsplash</a> <br /><br />
                        A go to for free high-resolution photos. With 10 new photos every 10 days.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="img/images/coverr.png"  class="content-img" alt="Coverr Icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://www.coverr.co/" class="content-link" target="_blank">Coverr</a> <br /><br />
                        Beautiful and free videos for your website. With 7 new videos added every monday.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/images/startupstock.png') }}"  class="content-img" alt="startupstock  icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://startupstockphotos.com" class="content-link" target="_blank">Startup Stock Photos</a> <br /><br />
                        Many amazing pictures for startup offices, people, devices and more. Worh checking out.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                    <img src="{{ asset('img/images/randomuser.png') }}"  class="content-img" alt="randomuser icon">
                    <div class="content">
                        <p class="heading-5 content-resource">
                            <a href="https://randomuser.me" class="content-link" target="_blank">Random User Generator</a> <br /><br />
                            An API for generating random user data, including photos. Like Lorem Ipsum, but for people.
                        </p>
                    </div>
                </div>
        </div>
    </div>

    <div class="row">
        <div class="content mr">
            <p class="heading-3  resource-title__heading">
                Great Icons
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
                <img src="{{ asset('img/template-icons/fontawesome.png') }}"  class="content-img" alt="fontawesome icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://fontawesome.com/?from=io" class="content-link" target="_blank">Font Awesome</a> <br /><br />
                        Get vector icons and social logos on your website with Font Awesome.
                    </p>
                </div>
            </div>
        <div class="col-1-of-4">
                <img src="{{ asset('img/template-icons/icomoon.png') }}"  class="content-img" alt="icomoon icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://icomoon.io" class="content-link" target="_blank">Icomoon </a> <br /><br />
                        Converts icon fonts to SVG icons and sprites. A great tool to utilize.
                    </p>
                </div>
            </div>
        <div class="col-1-of-4">
                <img src="{{ asset('img/template-icons/flaticon.png') }}"  class="content-img" alt="flaticon icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.flaticon.com/" class="content-link" target="_blank">Flaticon</a> <br /><br />
                        The largest free icons available in PNG, SVG, EPS, PSD and BASE 64 formats.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/template-icons/ionicons.png') }}"  class="content-img" alt="ionicons icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://ionicons.com" class="content-link" target="_blank">Ionicons</a> <br /><br />
                         Free Premium designed icons for use in web, iOS, Android, and desktop apps.
                    </p>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="{{ asset('img/template-icons/linea.png') }}"  class="content-img" alt="linea icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="http://linea.io" class="content-link" target="_blank">Linea Free Iconset </a> <br /><br />
                    Amazing iconset containing 700+ icons, available for different categories.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="img/template-icons/iconmonstr.png"  class="content-img" alt="iconmonstr Icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://iconmonstr.com" class="content-link" target="_blank">Iconmonstr</a> <br /><br />
                    Discover over 4000+ free icons in 305 different collections.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/template-icons/fontastic.png') }}"  class="content-img" alt="fantastic  icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="http://fontastic.me/" class="content-link" target="_blank">Fontastic</a> <br /><br />
                    Over 9,000 icons. Create icon fonts in seconds. Make your website faster.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
                <img src="{{ asset('img/template-icons/iconjar.jpg') }}"  class="content-img" alt="iconjar icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://geticonjar.com" class="content-link" target="_blank">Iconjar</a> <br /><br />
                        Working with Sketch, PS and AI nice Mac app to organize, search and use icons.
                    </p>
                </div>
            </div>
    </div>

    <div class="resource-title">
        <div class="row">
            <div class="content">
                <p class="heading-3  resource-title__heading">
                    Inspirations
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/inspire/mediaqueries.png') }}"  class="content-img" alt="mediaqueries icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://mediaqueri.es" class="content-link" target="_blank">Media Queries</a> <br /><br />
                        A suit of responsive designed websites to inspire your creative juices.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/inspire/calltoidea.png') }}"  class="content-img" alt="calltoidea icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.calltoidea.com" class="content-link" target="_blank">Call To Idea</a> <br /><br />
                        Get inspired for commonly used website elements such as forms, sliders, navigations, ...
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/inspire/onepagelove.png') }}"  class="content-img" alt="onepagelove icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://onepagelove.com" class="content-link" target="_blank">One Page Love</a> <br /><br />
                        A great place of showcase of inspiration, templates, and articles. Find one page websites.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/inspire/landbook.jpg') }}"  class="content-img" alt="landbook icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://land-book.com" class="content-link" target="_blank">Land Book</a> <br /><br />
                        Awesome Landing pages, Portfolios, Stores,  Blogs. Great inspiration resource.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/inspire/dribble.png') }}"  class="content-img" alt="Dribble icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://dribbble.com" class="content-link" target="_blank">Dribble</a> <br /><br />
                        A destination to find showcase creative work and repository of world's best designers.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/inspire/cssauthor.svg') }}"  class="content-img" alt="cssauthor icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://cssauthor.com/inspiration" class="content-link" target="_blank">CSS Author</a> <br /><br />
                            Derived some from a collection of freebies, resources, cms, Coding all in one place.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/inspire/behance.png') }}"  class="content-img" alt="behance icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.behance.net/search?content=projects&sort=appreciations&time=week&featured_on_behance=true&search=DESIGN" class="content-link" target="_blank">Behance</a> <br /><br />
                        Different design templates made by awesome web designers to get inspired.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
            <img src="{{ asset('img/inspire/medium.png') }}"  class="content-img" alt="medium icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://medium.muz.li/@RiverCityio" class="content-link" target="_blank">Design Digest</a> <br /><br />
                    Great links about design and interaction all from around the web. Check it out.
                </p>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="content mr">
            <p class="heading-3  resource-title__heading">
                Communities
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="{{ asset('img/community/stackoverflow.png') }}"  class="content-img" alt="stackoverflow icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://stackoverflow.com" class="content-link" target="_blank">Stack Over Flow</a> <br /><br />
                    Number one programmer community. Ask and find answers to your code problems.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/community/codrops.png') }}"  class="content-img" alt="codrops icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://tympanus.net/codrops" class="content-link" target="_blank">Codrops</a> <br /><br />
                    Articles and tutorials about latest web trends, techniques and new potentialities.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/community/medium.png') }}"  class="content-img" alt="medium icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://medium.com/" class="content-link" target="_blank">Medium</a> <br /><br />
                    Another blog for articles on all most every topic name it. Then it check it out.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/community/smashingmagazine.svg') }}"  class="content-img" alt="smashingmagazine icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://www.smashingmagazine.com/" class="content-link" target="_blank">Smashing Magazine</a> <br /><br />
                    Open platform for color inspiration with thousands of hand-picked color palettes.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="img/community/github.png"  class="content-img" alt="github icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://github.com" class="content-link" target="_blank">Github</a> <br /><br />
                    A guide to learn typography basics within a short period of time say 35 minutes.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/community/reddit.png') }}"  class="content-img" alt="reddit icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://www.reddit.com/r/programming/" class="content-link" target="_blank">Reddit</a> <br /><br />
                    A forum where content is curated and promoted by site members through voting.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/community/hackerrank.png') }}"  class="content-img" alt="HackerRank  icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://www.hackerrank.com/" class="content-link" target="_blank">HackerRank</a> <br /><br />
                    With over 5 million developers. Practice coding, prepare for interviews, and get hired.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/community/mdn.png') }}"  class="content-img" alt="mdn icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://developer.mozilla.org/en-US/docs/Archive/Mozilla/Web_Developer_Community" class="content-link" target="_blank">Moz Web Dev Community</a> <br /><br />
                    Connect with devs involved in cross-browser, standards-based web development.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-4">
            <img src="img/community/scotch.jpeg"  class="content-img" alt="scotch icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://scotch.io" class="content-link" target="_blank">Scotch</a> <br /><br />
                    Practical web development. Code. Eat. Sleep. loop. Check this out.

                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/community/tutplus.svg') }}"  class="content-img" alt="tutplus icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://code.tutsplus.com" class="content-link" target="_blank">Tuts Plus</a> <br /><br />
                    1000+ of free tutorials and courses to help you learn software development.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/community/codeacademy.svg') }}"  class="content-img" alt="codecademy  icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://www.codecademy.com" class="content-link" target="_blank">Code Academy</a> <br /><br />
                    Huge community of developers and premium courses to boost your career.
                </p>
            </div>
        </div>
        <div class="col-1-of-4">
            <img src="{{ asset('img/community/sitepoint.jpg') }}"  class="content-img" alt="sitepoint icon">
            <div class="content">
                <p class="heading-5 content-resource">
                    <a href="https://www.sitepoint.com/" class="content-link" target="_blank">Sitepoint</a> <br /><br />
                    Premium site full of books, videos, and courses for Full Stack Developers.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/community/techchrunch.png') }}"  class="content-img" alt="techcrunch icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://techcrunch.com" class="content-link" target="_blank">Techcrunch</a> <br /><br />
                        Reports on tech businesses, tech news, analysis of emerging trends in tech ...
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/community/toptal.png') }}"  class="content-img" alt="toptal icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.toptal.com/web" class="content-link" target="_blank">TopTal</a> <br /><br />
                        Marketplace where you can find and hire freelance devs, financials ...
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="img/community/udemy.jpeg"  class="content-img" alt="udemy icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.udemy.com" class="content-link" target="_blank">Udemy</a> <br /><br />
                        Online marketplace for great courses and also to create, promote your own.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/community/bitdegree.jpeg') }}"  class="content-img" alt="bitdegree  icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.bitdegree.org" class="content-link" target="_blank">Bitdegree</a> <br /><br />
                        Earn while you learn. Educational platform focusing on teaching digital skills.
                    </p>
                </div>
            </div>
        </div>

    <div class="resource-title">
        <div class="row">
            <div class="content">
                <p class="heading-3  resource-title__heading">
                    Test, optimize and Deploy.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/periodictable.png') }}"  class="content-img" alt="periodictable icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://www.newdesigngroup.ca/website-design/web-design-process-infographic" class="content-link" target="_blank">Web Design Process</a> <br /><br />
                        From project brief to launching the final version. An overview of web design process.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/googledev.png') }}"  class="content-img" alt="googledev icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://testmysite.withgoogle.com/intl/en-gb" class="content-link" target="_blank">Google Mobile-Friendly Test</a> <br /><br />
                        Test your webpage if it has a mobile-friendly design to Google ranking variables.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/googledev.png') }}"  class="content-img" alt="googledev icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://developers.google.com/speed/pagespeed/insights" class="content-link" target="_blank">Google PageSpeed Insights</a> <br /><br />
                        A tool to test your webpage for performance on all possible devices.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/optimize.png') }}"  class="content-img" alt="Optimizilla icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://imagecompressor.com" class="content-link" target="_blank">Optimizilla</a> <br /><br />
                        Up to 20 Compression of JPEG and PNG images to the minimum possible size.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/w3c.png') }}"  class="content-img" alt="w3c icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://validator.w3.org" class="content-link" target="_blank">HTML Validator By W3C</a> <br /><br />
                        Official W3C tool to check for HTML markup if its valid and contains no errors.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/w3c.png') }}"  class="content-img" alt="w3c icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://jigsaw.w3.org/css-validator" class="content-link" target="_blank">CSS Validator By W3C</a> <br /><br />
                        Official W3C tool to check for CSS markup if its valid and contains no errors.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/favicon.png') }}"  class="content-img" alt="favicongenerator icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://realfavicongenerator.net" class="content-link" target="_blank">Real Favicon Generator</a> <br /><br />
                        This tool creates favicons for your website for all platforms just submit an image.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/stayintech.png') }}"  class="content-img" alt="stayintech icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://stayintech.com/UX" class="content-link" target="_blank">Usability Checklist</a> <br /><br />
                        Useful to catch common usability problems of your website before you deploy.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/googleanalytics.png') }}"  class="content-img" alt="googleanalytics icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://marketingplatform.google.com/about/analytics" class="content-link" target="_blank">Google Analytics</a> <br /><br />
                        Gives you free tools to analyze data, visitors for your business in one place.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/sizzy.png') }}"  class="content-img" alt="sizzy icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://sizzy.co" class="content-link" target="_blank">Sizzy </a> <br /><br />
                        To see your page on multiple devices. Use this tool for results within seconds.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/optimization.png') }}"  class="content-img" alt="optimization icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="https://kinsta.com/learn/page-speed/" class="content-link" target="_blank">Web Speed Optimization</a> <br /><br />
                        In-depth web speed optimization guide showing importance of snappy websites.
                    </p>
                </div>
            </div>
            <div class="col-1-of-4">
                <img src="{{ asset('img/test/nibbler.png') }}"  class="content-img" alt="nibbler icon">
                <div class="content">
                    <p class="heading-5 content-resource">
                        <a href="http://nibbler.silktide.com/en_US" class="content-link" target="_blank">Nibbler</a> <br /><br />
                        Test websites key areas such as accessibility, SEO, social media and technology.
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
