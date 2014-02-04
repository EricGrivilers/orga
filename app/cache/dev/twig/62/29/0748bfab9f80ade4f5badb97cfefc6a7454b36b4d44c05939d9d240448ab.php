<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_62290748bfab9f80ade4f5badb97cfefc6a7454b36b4d44c05939d9d240448ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  62 => 24,  32 => 6,  30 => 5,  24 => 2,  19 => 1,  254 => 52,  247 => 49,  244 => 48,  236 => 49,  233 => 48,  226 => 49,  223 => 48,  216 => 49,  213 => 48,  206 => 49,  203 => 48,  199 => 41,  196 => 40,  152 => 38,  148 => 29,  144 => 27,  124 => 25,  117 => 20,  53 => 11,  48 => 10,  34 => 8,  26 => 3,  20 => 1,  209 => 59,  190 => 41,  182 => 40,  174 => 39,  166 => 38,  158 => 37,  150 => 36,  142 => 35,  134 => 34,  126 => 33,  120 => 21,  105 => 19,  99 => 16,  89 => 15,  84 => 13,  81 => 12,  78 => 11,  72 => 5,  66 => 25,  64 => 61,  61 => 60,  50 => 15,  47 => 19,  45 => 11,  38 => 8,  35 => 7,  29 => 3,  23 => 2,  118 => 30,  115 => 29,  108 => 20,  106 => 29,  102 => 27,  96 => 26,  87 => 23,  82 => 22,  77 => 21,  69 => 18,  63 => 15,  59 => 59,  54 => 13,  52 => 12,  44 => 6,  41 => 5,  36 => 4,  73 => 20,  67 => 20,  60 => 16,  55 => 14,  51 => 13,  46 => 14,  42 => 12,  39 => 9,  33 => 17,  31 => 18,  28 => 5,);
    }
}
