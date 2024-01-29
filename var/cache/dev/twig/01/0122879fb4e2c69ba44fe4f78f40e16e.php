<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @css/email.css */
class __TwigTemplate_72d44a6b813e3faa8c7ff8d0370ccbb0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@css/email.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@css/email.css"));

        // line 1
        echo "/* -------------------------------------
    GLOBAL RESETS
------------------------------------- */

/*All the styling goes here*/

img {
    border: none;
    -ms-interpolation-mode: bicubic;
    max-width: 100%;
}

body {
    background-color: #f6f6f6;
    font-family: sans-serif;
    -webkit-font-smoothing: antialiased;
    font-size: 14px;
    line-height: 1.4;
    margin: 0;
    padding: 0;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

table {
    border-collapse: separate;
    mso-table-lspace: 0pt;
    mso-table-rspace: 0pt;
    width: 100%; }
table td {
    font-family: sans-serif;
    font-size: 14px;
    vertical-align: top;
}

/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */

.body {
    background-color: #f6f6f6;
    width: 100%;
}

/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
    display: block;
    margin: 0 auto !important;
    /* makes it centered */
    max-width: 580px;
    padding: 10px;
    width: 580px;
}

/* This should also be a block element, so that it will fill 100% of the .container */
.content {
    box-sizing: border-box;
    display: block;
    margin: 0 auto;
    max-width: 580px;
    padding: 10px;
}

/* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
.main {
    background: #ffffff;
    border-radius: 3px;
    width: 100%;
}

.wrapper {
    box-sizing: border-box;
    padding: 20px;
}

.content-block {
    padding-bottom: 10px;
    padding-top: 10px;
}

.footer {
    clear: both;
    margin-top: 10px;
    text-align: center;
    width: 100%;
}
.footer td,
.footer p,
.footer span,
.footer a {
    color: #999999;
    font-size: 12px;
    text-align: center;
}
.header a {
    color: inherit;
    text-decoration: none;
}

/* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
h1,
h2,
h3,
h4 {
    color: #000000;
    font-family: sans-serif;
    font-weight: 400;
    line-height: 1.4;
    margin: 0;
    margin-bottom: 30px;
}

h1 {
    font-size: 35px;
    font-weight: 300;
    text-align: center;
    text-transform: capitalize;
}

p,
ul,
ol {
    font-family: sans-serif;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
    margin-bottom: 15px;
}
p li,
ul li,
ol li {
    list-style-position: inside;
    margin-left: 5px;
}

a {
    color: #007bff;
    text-decoration: underline;
}

/* -------------------------------------
    BUTTONS
------------------------------------- */
.btn {
    box-sizing: border-box;
    width: 100%; }
.btn > tbody > tr > td {
    padding-bottom: 15px; }
.btn table {
    width: auto;
}
.btn table td {
    background-color: #ffffff;
    border-radius: 5px;
    text-align: center;
}
.btn a {
    background-color: #ffffff;
    border: solid 1px #007bff;
    border-radius: 5px;
    box-sizing: border-box;
    color: #007bff;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    margin: 0;
    padding: 12px 25px;
    text-decoration: none;
    text-transform: capitalize;
}

.btn-primary table td {
    background-color: #007bff;
}

.btn-primary a {
    background-color: #007bff;
    border-color: #007bff;
    color: #ffffff;
}

/* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
.last {
    margin-bottom: 0;
}

.first {
    margin-top: 0;
}

.align-center {
    text-align: center;
}

.align-right {
    text-align: right;
}

.align-left {
    text-align: left;
}

.clear {
    clear: both;
}

.mt0 {
    margin-top: 0;
}

.mb0 {
    margin-bottom: 0;
}


hr {
    border: 0;
    border-bottom: 1px solid #f6f6f6;
    margin: 20px 0;
}

.image-column {
    padding-right: 20px;
    width:  80px;
}

/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
@media only screen and (max-width: 620px) {
    table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
    }
    table[class=body] p,
    table[class=body] ul,
    table[class=body] ol,
    table[class=body] td,
    table[class=body] span,
    table[class=body] a {
        font-size: 16px !important;
    }
    table[class=body] .wrapper,
    table[class=body] .article {
        padding: 10px !important;
    }
    table[class=body] .content {
        padding: 0 !important;
    }
    table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
    }
    table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
    }
    table[class=body] .btn table {
        width: 100% !important;
    }
    table[class=body] .btn a {
        width: 100% !important;
    }
    table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
    }
}

@media all {
    .btn-primary table td:hover {
        background-color: #34495e !important;
    }
    .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@css/email.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* -------------------------------------
    GLOBAL RESETS
------------------------------------- */

/*All the styling goes here*/

img {
    border: none;
    -ms-interpolation-mode: bicubic;
    max-width: 100%;
}

body {
    background-color: #f6f6f6;
    font-family: sans-serif;
    -webkit-font-smoothing: antialiased;
    font-size: 14px;
    line-height: 1.4;
    margin: 0;
    padding: 0;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

table {
    border-collapse: separate;
    mso-table-lspace: 0pt;
    mso-table-rspace: 0pt;
    width: 100%; }
table td {
    font-family: sans-serif;
    font-size: 14px;
    vertical-align: top;
}

/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */

.body {
    background-color: #f6f6f6;
    width: 100%;
}

/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
    display: block;
    margin: 0 auto !important;
    /* makes it centered */
    max-width: 580px;
    padding: 10px;
    width: 580px;
}

/* This should also be a block element, so that it will fill 100% of the .container */
.content {
    box-sizing: border-box;
    display: block;
    margin: 0 auto;
    max-width: 580px;
    padding: 10px;
}

/* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
.main {
    background: #ffffff;
    border-radius: 3px;
    width: 100%;
}

.wrapper {
    box-sizing: border-box;
    padding: 20px;
}

.content-block {
    padding-bottom: 10px;
    padding-top: 10px;
}

.footer {
    clear: both;
    margin-top: 10px;
    text-align: center;
    width: 100%;
}
.footer td,
.footer p,
.footer span,
.footer a {
    color: #999999;
    font-size: 12px;
    text-align: center;
}
.header a {
    color: inherit;
    text-decoration: none;
}

/* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
h1,
h2,
h3,
h4 {
    color: #000000;
    font-family: sans-serif;
    font-weight: 400;
    line-height: 1.4;
    margin: 0;
    margin-bottom: 30px;
}

h1 {
    font-size: 35px;
    font-weight: 300;
    text-align: center;
    text-transform: capitalize;
}

p,
ul,
ol {
    font-family: sans-serif;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
    margin-bottom: 15px;
}
p li,
ul li,
ol li {
    list-style-position: inside;
    margin-left: 5px;
}

a {
    color: #007bff;
    text-decoration: underline;
}

/* -------------------------------------
    BUTTONS
------------------------------------- */
.btn {
    box-sizing: border-box;
    width: 100%; }
.btn > tbody > tr > td {
    padding-bottom: 15px; }
.btn table {
    width: auto;
}
.btn table td {
    background-color: #ffffff;
    border-radius: 5px;
    text-align: center;
}
.btn a {
    background-color: #ffffff;
    border: solid 1px #007bff;
    border-radius: 5px;
    box-sizing: border-box;
    color: #007bff;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    margin: 0;
    padding: 12px 25px;
    text-decoration: none;
    text-transform: capitalize;
}

.btn-primary table td {
    background-color: #007bff;
}

.btn-primary a {
    background-color: #007bff;
    border-color: #007bff;
    color: #ffffff;
}

/* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
.last {
    margin-bottom: 0;
}

.first {
    margin-top: 0;
}

.align-center {
    text-align: center;
}

.align-right {
    text-align: right;
}

.align-left {
    text-align: left;
}

.clear {
    clear: both;
}

.mt0 {
    margin-top: 0;
}

.mb0 {
    margin-bottom: 0;
}


hr {
    border: 0;
    border-bottom: 1px solid #f6f6f6;
    margin: 20px 0;
}

.image-column {
    padding-right: 20px;
    width:  80px;
}

/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
@media only screen and (max-width: 620px) {
    table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
    }
    table[class=body] p,
    table[class=body] ul,
    table[class=body] ol,
    table[class=body] td,
    table[class=body] span,
    table[class=body] a {
        font-size: 16px !important;
    }
    table[class=body] .wrapper,
    table[class=body] .article {
        padding: 10px !important;
    }
    table[class=body] .content {
        padding: 0 !important;
    }
    table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
    }
    table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
    }
    table[class=body] .btn table {
        width: 100% !important;
    }
    table[class=body] .btn a {
        width: 100% !important;
    }
    table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
    }
}

@media all {
    .btn-primary table td:hover {
        background-color: #34495e !important;
    }
    .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
    }
}
", "@css/email.css", "/home/life/www/skillbox/diplom/public/css/email.css");
    }
}
