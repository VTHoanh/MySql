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

/* table/tracking/main.twig */
class __TwigTemplate_3a788c7a87094d6d5340f257e167d55b0074c7eb89000d18a14b51d826ab7fa5 extends \Twig\Template
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
        // line 1
        if ((($context["selectable_tables_num_rows"] ?? null) > 0)) {
            // line 2
            echo "    <form method=\"post\" action=\"";
            echo PhpMyAdmin\Url::getFromRoute("/table/tracking", ($context["url_params"] ?? null));
            echo "\">
        ";
            // line 3
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
        <select name=\"table\" class=\"autosubmit\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["selectable_tables_entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 6
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "table_name", [], "any", false, false, false, 6), "html", null, true);
                echo "\"";
                // line 7
                echo (((twig_get_attribute($this->env, $this->source, $context["entry"], "table_name", [], "any", false, false, false, 7) == ($context["selected_table"] ?? null))) ? (" selected") : (""));
                echo ">
                    ";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "db_name", [], "any", false, false, false, 8), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "table_name", [], "any", false, false, false, 8), "html", null, true);
                echo "
                    ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["entry"], "is_tracked", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "                        (";
                    echo _gettext("active");
                    echo ")
                    ";
                } else {
                    // line 12
                    echo "                        (";
                    echo _gettext("not active");
                    echo ")
                    ";
                }
                // line 14
                echo "                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </select>
        <input type=\"hidden\" name=\"show_versions_submit\" value=\"1\">
    </form>
";
        }
        // line 20
        echo "<br>
";
        // line 21
        if ((($context["last_version"] ?? null) > 0)) {
            // line 22
            echo "    <form method=\"post\" action=\"";
            echo PhpMyAdmin\Url::getFromRoute("/table/tracking");
            echo "\" name=\"versionsForm\" id=\"versionsForm\" class=\"ajax\">
        ";
            // line 23
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
        <table id=\"versions\" class=\"table table-light table-striped table-hover table-sm w-auto\">
            <thead class=\"thead-light\">
                <tr>
                    <th></th>
                    <th>";
            // line 28
            echo _gettext("Version");
            echo "</th>
                    <th>";
            // line 29
            echo _gettext("Created");
            echo "</th>
                    <th>";
            // line 30
            echo _gettext("Updated");
            echo "</th>
                    <th>";
            // line 31
            echo _gettext("Status");
            echo "</th>
                    <th>";
            // line 32
            echo _gettext("Action");
            echo "</th>
                    <th>";
            // line 33
            echo _gettext("Show");
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 38
                echo "                    <tr>
                        <td class=\"text-center\">
                            <input type=\"checkbox\" name=\"selected_versions[]\"
                                class=\"checkall\" id=\"selected_versions_";
                // line 41
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["version"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["version"] ?? null) : null));
                echo "\"
                                value=\"";
                // line 42
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["version"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["version"] ?? null) : null));
                echo "\">
                        </td>
                        <td class=\"floatright\">
                            <label for=\"selected_versions_";
                // line 45
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["version"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["version"] ?? null) : null));
                echo "\">
                                <b>";
                // line 46
                echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["version"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["version"] ?? null) : null));
                echo "</b>
                            </label>
                        </td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["version"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["date_created"] ?? null) : null));
                echo "</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["version"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["date_updated"] ?? null) : null));
                echo "</td>
                        ";
                // line 51
                if (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["version"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["tracking_active"] ?? null) : null) == 1)) {
                    // line 52
                    echo "                            ";
                    $context["last_version_status"] = 1;
                    // line 53
                    echo "                            <td>";
                    echo _gettext("active");
                    echo "</td>
                        ";
                } else {
                    // line 55
                    echo "                            ";
                    $context["last_version_status"] = 0;
                    // line 56
                    echo "                            <td>";
                    echo _gettext("not active");
                    echo "</td>
                        ";
                }
                // line 58
                echo "                        <td>
                            <a class=\"delete_version_anchor ajax\" href=\"";
                // line 59
                echo PhpMyAdmin\Url::getFromRoute("/table/tracking");
                echo "\" data-post=\"";
                // line 60
                echo PhpMyAdmin\Url::getCommon(twig_array_merge(($context["url_params"] ?? null), ["version" => (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 =                 // line 61
$context["version"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["version"] ?? null) : null), "submit_delete_version" => true]), "");
                // line 63
                echo "\">
                                ";
                // line 64
                echo \PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete version"));
                echo "
                            </a>
                        </td>
                        <td>
                            <a href=\"";
                // line 68
                echo PhpMyAdmin\Url::getFromRoute("/table/tracking");
                echo "\" data-post=\"";
                // line 69
                echo PhpMyAdmin\Url::getCommon(twig_array_merge(($context["url_params"] ?? null), ["version" => (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 =                 // line 70
$context["version"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["version"] ?? null) : null), "report" => "true"]), "");
                // line 72
                echo "\">
                                ";
                // line 73
                echo \PhpMyAdmin\Html\Generator::getIcon("b_report", _gettext("Tracking report"));
                echo "
                            </a>
                            <a href=\"";
                // line 75
                echo PhpMyAdmin\Url::getFromRoute("/table/tracking");
                echo "\" data-post=\"";
                // line 76
                echo PhpMyAdmin\Url::getCommon(twig_array_merge(($context["url_params"] ?? null), ["version" => (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 =                 // line 77
$context["version"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["version"] ?? null) : null), "snapshot" => "true"]), "");
                // line 79
                echo "\">
                                ";
                // line 80
                echo \PhpMyAdmin\Html\Generator::getIcon("b_props", _gettext("Structure snapshot"));
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "            </tbody>
        </table>
        ";
            // line 87
            $this->loadTemplate("select_all.twig", "table/tracking/main.twig", 87)->display(twig_to_array(["theme_image_path" =>             // line 88
($context["theme_image_path"] ?? null), "text_dir" =>             // line 89
($context["text_dir"] ?? null), "form_name" => "versionsForm"]));
            // line 92
            echo "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete_version\" title=\"";
            echo _gettext("Delete version");
            echo "\">
            ";
            // line 93
            echo \PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete version"));
            echo "
        </button>
    </form>
    ";
            // line 96
            $context["last_version_element"] = twig_first($this->env, ($context["versions"] ?? null));
            // line 97
            echo "    <div>
        <form method=\"post\" action=\"";
            // line 98
            echo PhpMyAdmin\Url::getFromRoute("/table/tracking", ($context["url_params"] ?? null));
            echo "\">
            ";
            // line 99
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
            <fieldset>
                <legend>
                    ";
            // line 102
            if (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["last_version_element"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["tracking_active"] ?? null) : null) == 0)) {
                // line 103
                echo "                        ";
                $context["legend"] = _gettext("Activate tracking for %s");
                // line 104
                echo "                        ";
                $context["value"] = "activate_now";
                // line 105
                echo "                        ";
                $context["button"] = _gettext("Activate now");
                // line 106
                echo "                    ";
            } else {
                // line 107
                echo "                        ";
                $context["legend"] = _gettext("Deactivate tracking for %s");
                // line 108
                echo "                        ";
                $context["value"] = "deactivate_now";
                // line 109
                echo "                        ";
                $context["button"] = _gettext("Deactivate now");
                // line 110
                echo "                    ";
            }
            // line 111
            echo "
                    ";
            // line 112
            echo twig_escape_filter($this->env, sprintf(($context["legend"] ?? null), ((($context["db"] ?? null) . ".") . ($context["table"] ?? null))), "html", null, true);
            echo "
                </legend>
                <input type=\"hidden\" name=\"version\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, ($context["last_version"] ?? null), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"toggle_activation\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\">
                <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, ($context["button"] ?? null), "html", null, true);
            echo "\">
            </fieldset>
        </form>
    </div>
";
        }
        // line 121
        $this->loadTemplate("create_tracking_version.twig", "table/tracking/main.twig", 121)->display(twig_to_array(["route" => "/table/tracking", "url_params" =>         // line 123
($context["url_params"] ?? null), "last_version" =>         // line 124
($context["last_version"] ?? null), "db" =>         // line 125
($context["db"] ?? null), "selected" => [0 =>         // line 126
($context["table"] ?? null)], "type" =>         // line 127
($context["type"] ?? null), "default_statements" =>         // line 128
($context["default_statements"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "table/tracking/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 128,  338 => 127,  337 => 126,  336 => 125,  335 => 124,  334 => 123,  333 => 121,  325 => 116,  321 => 115,  317 => 114,  312 => 112,  309 => 111,  306 => 110,  303 => 109,  300 => 108,  297 => 107,  294 => 106,  291 => 105,  288 => 104,  285 => 103,  283 => 102,  277 => 99,  273 => 98,  270 => 97,  268 => 96,  262 => 93,  257 => 92,  255 => 89,  254 => 88,  253 => 87,  249 => 85,  238 => 80,  235 => 79,  233 => 77,  232 => 76,  229 => 75,  224 => 73,  221 => 72,  219 => 70,  218 => 69,  215 => 68,  208 => 64,  205 => 63,  203 => 61,  202 => 60,  199 => 59,  196 => 58,  190 => 56,  187 => 55,  181 => 53,  178 => 52,  176 => 51,  172 => 50,  168 => 49,  162 => 46,  158 => 45,  152 => 42,  148 => 41,  143 => 38,  139 => 37,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  104 => 23,  99 => 22,  97 => 21,  94 => 20,  88 => 16,  81 => 14,  75 => 12,  69 => 10,  67 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/tracking/main.twig", "C:\\xampp\\phpMyAdmin\\templates\\table\\tracking\\main.twig");
    }
}
