<?php

/* @Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt */
class __TwigTemplate_aa2d6e02e84adf530b3862efb637985f942794692a255a1fc2633e4bddfb6c9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<script>
    function initMap() {
    // Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 50.880794, lng: 7.009742},
        zoom: 16,
        styles: [
  {
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#1d2c4d\"
      }
    ]
  },
  {
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#8ec3b9\"
      }
    ]
  },
  {
    \"elementType\": \"labels.text.stroke\",
    \"stylers\": [
      {
        \"color\": \"#1a3646\"
      }
    ]
  },
  {
    \"featureType\": \"administrative.country\",
    \"elementType\": \"geometry.stroke\",
    \"stylers\": [
      {
        \"color\": \"#4b6878\"
      }
    ]
  },
  {
    \"featureType\": \"administrative.land_parcel\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#64779e\"
      }
    ]
  },
  {
    \"featureType\": \"administrative.province\",
    \"elementType\": \"geometry.stroke\",
    \"stylers\": [
      {
        \"color\": \"#4b6878\"
      }
    ]
  },
  {
    \"featureType\": \"landscape.man_made\",
    \"elementType\": \"geometry.stroke\",
    \"stylers\": [
      {
        \"color\": \"#334e87\"
      }
    ]
  },
  {
    \"featureType\": \"landscape.natural\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#023e58\"
      }
    ]
  },
  {
    \"featureType\": \"poi\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#283d6a\"
      }
    ]
  },
  {
    \"featureType\": \"poi\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#6f9ba5\"
      }
    ]
  },
  {
    \"featureType\": \"poi\",
    \"elementType\": \"labels.text.stroke\",
    \"stylers\": [
      {
        \"color\": \"#1d2c4d\"
      }
    ]
  },
  {
    \"featureType\": \"poi.park\",
    \"elementType\": \"geometry.fill\",
    \"stylers\": [
      {
        \"color\": \"#023e58\"
      }
    ]
  },
  {
    \"featureType\": \"poi.park\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#3C7680\"
      }
    ]
  },
  {
    \"featureType\": \"road\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#304a7d\"
      }
    ]
  },
  {
    \"featureType\": \"road\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#98a5be\"
      }
    ]
  },
  {
    \"featureType\": \"road\",
    \"elementType\": \"labels.text.stroke\",
    \"stylers\": [
      {
        \"color\": \"#1d2c4d\"
      }
    ]
  },
  {
    \"featureType\": \"road.highway\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#2c6675\"
      }
    ]
  },
  {
    \"featureType\": \"road.highway\",
    \"elementType\": \"geometry.stroke\",
    \"stylers\": [
      {
        \"color\": \"#255763\"
      }
    ]
  },
  {
    \"featureType\": \"road.highway\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#b0d5ce\"
      }
    ]
  },
  {
    \"featureType\": \"road.highway\",
    \"elementType\": \"labels.text.stroke\",
    \"stylers\": [
      {
        \"color\": \"#023e58\"
      }
    ]
  },
  {
    \"featureType\": \"transit\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#98a5be\"
      }
    ]
  },
  {
    \"featureType\": \"transit\",
    \"elementType\": \"labels.text.stroke\",
    \"stylers\": [
      {
        \"color\": \"#1d2c4d\"
      }
    ]
  },
  {
    \"featureType\": \"transit.line\",
    \"elementType\": \"geometry.fill\",
    \"stylers\": [
      {
        \"color\": \"#283d6a\"
      }
    ]
  },
  {
    \"featureType\": \"transit.station\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#3a4762\"
      }
    ]
  },
  {
    \"featureType\": \"water\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#0e1626\"
      }
    ]
  },
  {
    \"featureType\": \"water\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#4e6d70\"
      }
    ]
  }
]
    });

    var marker = new google.maps.Marker({
        position: {lat: 50.880794, lng: 7.009742},
        map: map,
        title: 'Hello World!'
    });

    marker.setMap(map);

    }
</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtZcKDe4tOGsr8yU0aqfL-6Fyie5gVlmo&amp;callback=initMap\" async defer></script>
<div class=\"container my-100\">  
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Kontakt</h1>
            <hr></div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <!--%form_massage%-->
            <form name=\"kontakt\" action=\"\" method=\"POST\" id=\"kontakt\">
                <fieldset><div class=\"form-group\">
                        <div class=\"row\">
                            <legend class=\"col-form-label col-sm-3 pt-0\">Anrede: <span class=\"required\">*</span>
</legend>
                            <div class=\"col-sm-9\">
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"data[anrede]\" id=\"anrede_female\" value=\"Frau\" if uri.query endif required=\"required\"><label class=\"form-check-label\" for=\"anrede_female\">Frau</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"data[anrede]\" id=\"anrede_male\" value=\"Herr\" if uri.query endif><label class=\"form-check-label\" for=\"anrede_male\">Herr</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"firmenname\">Firmenname:</label>
                        <input name=\"data[firmenname]\" type=\"text\" value=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "value", [0 => "firmenname"], "method"), "html_attr");
        echo "\" class=\"form-control\" id=\"firmenname\"></div>
                    <div class=\"form-group\">
                        <label for=\"companytype\">Company Type: <span class=\"required\">*</span></label>
                        <select name=\"data[companytype]\" class=\"form-control\" id=\"companytype\" required=\"required\"><option value=\"\"></option><option value=\"typea\" if uri.query endif>Type A</option><option value=\"typeb\" if uri.query endif>Type B</option></select></div>
                    <div class=\"form-group\">
                        <label for=\"name\">Vor- und Nachname: <span class=\"required\">*</span></label>
                        <input name=\"data[name]\" type=\"text\" value=\"";
        // line 285
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "name"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"name\" required=\"required\"></div>
                    <div class=\"form-group\">
                        <label for=\"email\">E-Mail: <span class=\"required\">*</span></label>
                        <input name=\"data[email]\" type=\"email\" value=\"";
        // line 288
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "email"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" required=\"required\"></div>
                    <div class=\"form-group\">
                        <label for=\"telefon\">Telefon:</label>
                        <input name=\"data[telefon]\" type=\"tel\" value=\"";
        // line 291
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "telefon"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"telefon\"></div>
                    <div class=\"form-group\">
                        <label for=\"betreff\">Betreff: <span class=\"required\">*</span></label>
                        <input name=\"data[betreff]\" type=\"text\" value=\"";
        // line 294
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "betreff"], "method"), ", "), "html_attr");
        echo "\" class=\"form-control\" id=\"betreff\" required=\"required\"></div>
                    <div class=\"form-group\">
                        <label for=\"nachricht\">Nachricht:</label>
                        <textarea name=\"data[nachricht]\" class=\"form-control\" id=\"nachricht\" rows=\"8\">";
        // line 297
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["form"] ?? null), "value", [0 => "nachricht"], "method")), "html");
        echo "</textarea></div>
                    <div class=\"col-lg-12\">
                        <div class=\"checkbox\" style=\"margin-top:20px;\">
                            <table><tr><td valign=\"top\"><input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"></td>
                                    <td><label for=\"ja_ich_stimme_zu\" class=\"ml-5\">Mit dieser Anmeldung akzeptieren Sie die <a href=\"%7B%7Burl('agbs')%7D%7D\" target=\"_blank\" class=\"\">AGB</a> der {FIRMENNAME} und bestätigen die Kenntnisnahme der Widerrufsbelehrung und unsere <a href=\"%7B%7Burl('datenschutz')%7D%7D\" target=\"_blank\" class=\"\">Datenschutzbestimmungen</a>.</label></td>
                                </tr></table></div>
                    </div>
                    <div class=\"form-group mt-30\">
                        <div style=\"width: 304px;\" class=\"mx-auto\">
                            <label for=\"captcha\">Captcha: <span class=\"required\">*</span></label>
                            <div class=\"form-data\" data-grav-field=\"captcha\" data-grav-disabled=\"true\" data-grav-default=\"null\">
                                <script>
                                    var captchaOnloadCallback = function captchaOnloadCallback() {
                                        grecaptcha.render('g-recaptcha', {
                                            'sitekey': \"6Le5vnUUAAAAAHzAy9rfm_wy63bXttVCLFOtD0Lu\",
                                            'callback': captchaValidatedCallback,
                                            'expired-callback': captchaExpiredCallback
                                        });
                                    };
                                    var captchaValidatedCallback = function captchaValidatedCallback() {};
                                    var captchaExpiredCallback = function captchaExpiredCallback() { grecaptcha.reset(); };
                                </script><script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&amp;render=explicit&amp;hl=de\" async defer></script><div class=\"g-recaptcha mx-auto\" id=\"g-recaptcha\"></div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"__form-name__\" value=\"kontakt\">
                    ";
        // line 323
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary\" type=\"submit\">Senden</button>
                    </div>
                </fieldset></form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 323,  332 => 297,  326 => 294,  320 => 291,  314 => 288,  308 => 285,  299 => 279,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    function initMap() {
    // Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 50.880794, lng: 7.009742},
        zoom: 16,
        styles: [
  {
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#1d2c4d\"
      }
    ]
  },
  {
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#8ec3b9\"
      }
    ]
  },
  {
    \"elementType\": \"labels.text.stroke\",
    \"stylers\": [
      {
        \"color\": \"#1a3646\"
      }
    ]
  },
  {
    \"featureType\": \"administrative.country\",
    \"elementType\": \"geometry.stroke\",
    \"stylers\": [
      {
        \"color\": \"#4b6878\"
      }
    ]
  },
  {
    \"featureType\": \"administrative.land_parcel\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#64779e\"
      }
    ]
  },
  {
    \"featureType\": \"administrative.province\",
    \"elementType\": \"geometry.stroke\",
    \"stylers\": [
      {
        \"color\": \"#4b6878\"
      }
    ]
  },
  {
    \"featureType\": \"landscape.man_made\",
    \"elementType\": \"geometry.stroke\",
    \"stylers\": [
      {
        \"color\": \"#334e87\"
      }
    ]
  },
  {
    \"featureType\": \"landscape.natural\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#023e58\"
      }
    ]
  },
  {
    \"featureType\": \"poi\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#283d6a\"
      }
    ]
  },
  {
    \"featureType\": \"poi\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#6f9ba5\"
      }
    ]
  },
  {
    \"featureType\": \"poi\",
    \"elementType\": \"labels.text.stroke\",
    \"stylers\": [
      {
        \"color\": \"#1d2c4d\"
      }
    ]
  },
  {
    \"featureType\": \"poi.park\",
    \"elementType\": \"geometry.fill\",
    \"stylers\": [
      {
        \"color\": \"#023e58\"
      }
    ]
  },
  {
    \"featureType\": \"poi.park\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#3C7680\"
      }
    ]
  },
  {
    \"featureType\": \"road\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#304a7d\"
      }
    ]
  },
  {
    \"featureType\": \"road\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#98a5be\"
      }
    ]
  },
  {
    \"featureType\": \"road\",
    \"elementType\": \"labels.text.stroke\",
    \"stylers\": [
      {
        \"color\": \"#1d2c4d\"
      }
    ]
  },
  {
    \"featureType\": \"road.highway\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#2c6675\"
      }
    ]
  },
  {
    \"featureType\": \"road.highway\",
    \"elementType\": \"geometry.stroke\",
    \"stylers\": [
      {
        \"color\": \"#255763\"
      }
    ]
  },
  {
    \"featureType\": \"road.highway\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#b0d5ce\"
      }
    ]
  },
  {
    \"featureType\": \"road.highway\",
    \"elementType\": \"labels.text.stroke\",
    \"stylers\": [
      {
        \"color\": \"#023e58\"
      }
    ]
  },
  {
    \"featureType\": \"transit\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#98a5be\"
      }
    ]
  },
  {
    \"featureType\": \"transit\",
    \"elementType\": \"labels.text.stroke\",
    \"stylers\": [
      {
        \"color\": \"#1d2c4d\"
      }
    ]
  },
  {
    \"featureType\": \"transit.line\",
    \"elementType\": \"geometry.fill\",
    \"stylers\": [
      {
        \"color\": \"#283d6a\"
      }
    ]
  },
  {
    \"featureType\": \"transit.station\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#3a4762\"
      }
    ]
  },
  {
    \"featureType\": \"water\",
    \"elementType\": \"geometry\",
    \"stylers\": [
      {
        \"color\": \"#0e1626\"
      }
    ]
  },
  {
    \"featureType\": \"water\",
    \"elementType\": \"labels.text.fill\",
    \"stylers\": [
      {
        \"color\": \"#4e6d70\"
      }
    ]
  }
]
    });

    var marker = new google.maps.Marker({
        position: {lat: 50.880794, lng: 7.009742},
        map: map,
        title: 'Hello World!'
    });

    marker.setMap(map);

    }
</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtZcKDe4tOGsr8yU0aqfL-6Fyie5gVlmo&amp;callback=initMap\" async defer></script>
<div class=\"container my-100\">  
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Kontakt</h1>
            <hr></div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <!--%form_massage%-->
            <form name=\"kontakt\" action=\"\" method=\"POST\" id=\"kontakt\">
                <fieldset><div class=\"form-group\">
                        <div class=\"row\">
                            <legend class=\"col-form-label col-sm-3 pt-0\">Anrede: <span class=\"required\">*</span>
</legend>
                            <div class=\"col-sm-9\">
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"data[anrede]\" id=\"anrede_female\" value=\"Frau\" if uri.query endif required=\"required\"><label class=\"form-check-label\" for=\"anrede_female\">Frau</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"data[anrede]\" id=\"anrede_male\" value=\"Herr\" if uri.query endif><label class=\"form-check-label\" for=\"anrede_male\">Herr</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"firmenname\">Firmenname:</label>
                        <input name=\"data[firmenname]\" type=\"text\" value=\"{{ form.value('firmenname')|e('html_attr') }}\" class=\"form-control\" id=\"firmenname\"></div>
                    <div class=\"form-group\">
                        <label for=\"companytype\">Company Type: <span class=\"required\">*</span></label>
                        <select name=\"data[companytype]\" class=\"form-control\" id=\"companytype\" required=\"required\"><option value=\"\"></option><option value=\"typea\" if uri.query endif>Type A</option><option value=\"typeb\" if uri.query endif>Type B</option></select></div>
                    <div class=\"form-group\">
                        <label for=\"name\">Vor- und Nachname: <span class=\"required\">*</span></label>
                        <input name=\"data[name]\" type=\"text\" value=\"{{ form.value('name')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"name\" required=\"required\"></div>
                    <div class=\"form-group\">
                        <label for=\"email\">E-Mail: <span class=\"required\">*</span></label>
                        <input name=\"data[email]\" type=\"email\" value=\"{{ form.value('email')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" required=\"required\"></div>
                    <div class=\"form-group\">
                        <label for=\"telefon\">Telefon:</label>
                        <input name=\"data[telefon]\" type=\"tel\" value=\"{{ form.value('telefon')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"telefon\"></div>
                    <div class=\"form-group\">
                        <label for=\"betreff\">Betreff: <span class=\"required\">*</span></label>
                        <input name=\"data[betreff]\" type=\"text\" value=\"{{ form.value('betreff')|join(', ')|e('html_attr') }}\" class=\"form-control\" id=\"betreff\" required=\"required\"></div>
                    <div class=\"form-group\">
                        <label for=\"nachricht\">Nachricht:</label>
                        <textarea name=\"data[nachricht]\" class=\"form-control\" id=\"nachricht\" rows=\"8\">{{ form.value('nachricht')|trim|e('html') }}</textarea></div>
                    <div class=\"col-lg-12\">
                        <div class=\"checkbox\" style=\"margin-top:20px;\">
                            <table><tr><td valign=\"top\"><input type=\"checkbox\" name=\"data[ja_ich_stimme_zu]\" id=\"ja_ich_stimme_zu\" required=\"required\"></td>
                                    <td><label for=\"ja_ich_stimme_zu\" class=\"ml-5\">Mit dieser Anmeldung akzeptieren Sie die <a href=\"%7B%7Burl('agbs')%7D%7D\" target=\"_blank\" class=\"\">AGB</a> der {FIRMENNAME} und bestätigen die Kenntnisnahme der Widerrufsbelehrung und unsere <a href=\"%7B%7Burl('datenschutz')%7D%7D\" target=\"_blank\" class=\"\">Datenschutzbestimmungen</a>.</label></td>
                                </tr></table></div>
                    </div>
                    <div class=\"form-group mt-30\">
                        <div style=\"width: 304px;\" class=\"mx-auto\">
                            <label for=\"captcha\">Captcha: <span class=\"required\">*</span></label>
                            <div class=\"form-data\" data-grav-field=\"captcha\" data-grav-disabled=\"true\" data-grav-default=\"null\">
                                <script>
                                    var captchaOnloadCallback = function captchaOnloadCallback() {
                                        grecaptcha.render('g-recaptcha', {
                                            'sitekey': \"6Le5vnUUAAAAAHzAy9rfm_wy63bXttVCLFOtD0Lu\",
                                            'callback': captchaValidatedCallback,
                                            'expired-callback': captchaExpiredCallback
                                        });
                                    };
                                    var captchaValidatedCallback = function captchaValidatedCallback() {};
                                    var captchaExpiredCallback = function captchaExpiredCallback() { grecaptcha.reset(); };
                                </script><script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&amp;render=explicit&amp;hl=de\" async defer></script><div class=\"g-recaptcha mx-auto\" id=\"g-recaptcha\"></div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"__form-name__\" value=\"kontakt\">
                    {{ nonce_field('form', 'form-nonce') }}
                    <div class=\"text-center\">
                        <button class=\"btn btn-primary\" type=\"submit\">Senden</button>
                    </div>
                </fieldset></form>
        </div>
    </div>
</div>", "@Page:/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/pages/03.kontakt", "");
    }
}
