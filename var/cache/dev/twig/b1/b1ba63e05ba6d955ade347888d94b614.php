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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig */
class __TwigTemplate_99b35768f7bcef9824a6c617faecf6a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'employee_form' => [$this, 'block_employee_form'],
            'employee_form_rest' => [$this, 'block_employee_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", 26)->unwrap();
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('employee_form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_employee_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_form"));

        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employees", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 37, $this->source); })()), 'errors');
        echo "

          ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 39, $this->source); })()), "firstname", [], "any", false, false, false, 39), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First name", [], "Admin.Global")]], 39, $context, $this->getSourceContext());
        // line 41
        echo "

          ";
        // line 43
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 43, $this->source); })()), "lastname", [], "any", false, false, false, 43), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last name", [], "Admin.Global")]], 43, $context, $this->getSourceContext());
        // line 45
        echo "

          ";
        // line 47
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 47, $this->source); })()), "avatarUrl", [], "any", false, false, false, 47), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avatar", [], "Admin.Global")]], 47, $context, $this->getSourceContext());
        // line 49
        echo "

          <div class=\"form-group row\">
            <label class=\"form-control-label\"></label>
            <div class=\"col-sm\">
              <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["avatarUrl"]) || array_key_exists("avatarUrl", $context) ? $context["avatarUrl"] : (function () { throw new RuntimeError('Variable "avatarUrl" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>

          ";
        // line 58
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 58, $this->source); })()), "has_enabled_gravatar", [], "any", false, false, false, 58), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable gravatar", [], "Admin.Global")]], 58, $context, $this->getSourceContext());
        // line 60
        echo "

          ";
        // line 62
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address", [], "Admin.Global")]], 62, $context, $this->getSourceContext());
        // line 64
        echo "

          ";
        // line 66
        $context["passwordHelpMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password should be at least %num% characters long.", ["%num%" => $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_SECURITY_PASSWORD_POLICY_MINIMUM_LENGTH"))], "Admin.Advparameters.Help");
        // line 67
        echo "
          ";
        // line 68
        if ((isset($context["isRestrictedAccess"]) || array_key_exists("isRestrictedAccess", $context) ? $context["isRestrictedAccess"] : (function () { throw new RuntimeError('Variable "isRestrictedAccess" does not exist.', 68, $this->source); })())) {
            // line 69
            echo "            ";
            $context["oldPasswordVars"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 69, $this->source); })()), "change_password", [], "any", false, false, false, 69), "old_password", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), ((array_key_exists("old_password", $context)) ? (_twig_default_filter((isset($context["old_password"]) || array_key_exists("old_password", $context) ? $context["old_password"] : (function () { throw new RuntimeError('Variable "old_password" does not exist.', 69, $this->source); })()), [])) : ([])));
            // line 70
            echo "            ";
            $context["newPasswordFirstVars"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 70, $this->source); })()), "change_password", [], "any", false, false, false, 70), "new_password", [], "any", false, false, false, 70), "children", [], "any", false, false, false, 70), "first", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), ((twig_get_attribute($this->env, $this->source, ($context["new_password"] ?? null), "first_options", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["new_password"] ?? null), "first_options", [], "any", false, false, false, 70), [])) : ([])));
            // line 71
            echo "            ";
            $context["newPasswordSecondVars"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 71, $this->source); })()), "change_password", [], "any", false, false, false, 71), "new_password", [], "any", false, false, false, 71), "children", [], "any", false, false, false, 71), "second", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), ((twig_get_attribute($this->env, $this->source, ($context["new_password"] ?? null), "second_options", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["new_password"] ?? null), "second_options", [], "any", false, false, false, 71), [])) : ([])));
            // line 72
            echo "
            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 79
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 79, $this->source); })()), "change_password", [], "any", false, false, false, 79), "change_password_button", [], "any", false, false, false, 79), 'widget', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change password...", [], "messages"), "attr" => ["class" => "btn-outline-secondary js-change-password"]]);
            // line 84
            echo "

                <div class=\"card card-body js-change-password-block d-none\">
                  ";
            // line 88
            echo "                  ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 88, $this->source); })()), "change_password", [], "any", false, false, false, 88), "old_password", [], "any", false, false, false, 88), (isset($context["oldPasswordVars"]) || array_key_exists("oldPasswordVars", $context) ? $context["oldPasswordVars"] : (function () { throw new RuntimeError('Variable "oldPasswordVars" does not exist.', 88, $this->source); })()), ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current password", [], "messages"), "required" => true]], 88, $context, $this->getSourceContext());
            // line 91
            echo "

                  ";
            // line 94
            echo "                  <div class=\"form-group row\">
                    ";
            // line 95
            echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New password", [], "messages"), (isset($context["passwordHelpMessage"]) || array_key_exists("passwordHelpMessage", $context) ? $context["passwordHelpMessage"] : (function () { throw new RuntimeError('Variable "passwordHelpMessage" does not exist.', 95, $this->source); })()), "", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 95, $this->source); })()), "change_password", [], "any", false, false, false, 95), "new_password", [], "any", false, false, false, 95), "children", [], "any", false, false, false, 95), "first", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95), true], 95, $context, $this->getSourceContext());
            echo "
                    <div class=\"col-sm\">
                      ";
            // line 97
            echo twig_call_macro($macros["ps"], "macro_form_widget_with_error", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 97, $this->source); })()), "change_password", [], "any", false, false, false, 97), "new_password", [], "any", false, false, false, 97), "children", [], "any", false, false, false, 97), "first", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 97, $this->source); })()), "change_password", [], "any", false, false, false, 97), "new_password", [], "any", false, false, false, 97), "children", [], "any", false, false, false, 97), "first", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97)], 97, $context, $this->getSourceContext());
            echo "
                    </div>
                  </div>

                  ";
            // line 102
            echo "                  ";
            // line 103
            echo "                  ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 103, $this->source); })()), "change_password", [], "any", false, false, false, 103), "new_password", [], "any", false, false, false, 103), "children", [], "any", false, false, false, 103), "second", [], "any", false, false, false, 103), (isset($context["newPasswordSecondVars"]) || array_key_exists("newPasswordSecondVars", $context) ? $context["newPasswordSecondVars"] : (function () { throw new RuntimeError('Variable "newPasswordSecondVars" does not exist.', 103, $this->source); })()), ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm password", [], "messages"), "help" => "", "required" => true]], 103, $context, $this->getSourceContext());
            // line 107
            echo "

                  ";
            // line 109
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 109, $this->source); })()), "change_password", [], "any", false, false, false, 109), "cancel_button", [], "any", false, false, false, 109), ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "attr" => ["class" => "btn-outline-secondary js-change-password-cancel"]]], 109, $context, $this->getSourceContext());
            // line 114
            echo "

                </div>
              </div>
            </div>
          ";
        } else {
            // line 120
            echo "            ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 120, $this->source); })()), "password", [], "any", false, false, false, 120), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "help" =>             // line 122
(isset($context["passwordHelpMessage"]) || array_key_exists("passwordHelpMessage", $context) ? $context["passwordHelpMessage"] : (function () { throw new RuntimeError('Variable "passwordHelpMessage" does not exist.', 122, $this->source); })())]], 120, $context, $this->getSourceContext());
            // line 123
            echo "
          ";
        }
        // line 125
        echo "
          ";
        // line 126
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 126, $this->source); })()), "language", [], "any", false, false, false, 126), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language", [], "Admin.Global")]], 126, $context, $this->getSourceContext());
        // line 128
        echo "

          ";
        // line 130
        if ( !(isset($context["isRestrictedAccess"]) || array_key_exists("isRestrictedAccess", $context) ? $context["isRestrictedAccess"] : (function () { throw new RuntimeError('Variable "isRestrictedAccess" does not exist.', 130, $this->source); })())) {
            // line 131
            echo "            ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 131, $this->source); })()), "active", [], "any", false, false, false, 131), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active", [], "Admin.Global"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Allow or disallow this employee to log in to the Admin panel.", [], "Admin.Advparameters.Help")]], 131, $context, $this->getSourceContext());
            // line 134
            echo "

            ";
            // line 136
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 136, $this->source); })()), "profile", [], "any", false, false, false, 136), ["attr" => ["data-admin-profile" =>             // line 138
(isset($context["superAdminProfileId"]) || array_key_exists("superAdminProfileId", $context) ? $context["superAdminProfileId"] : (function () { throw new RuntimeError('Variable "superAdminProfileId" does not exist.', 138, $this->source); })()), "data-get-tabs-url" =>             // line 139
(isset($context["getTabsUrl"]) || array_key_exists("getTabsUrl", $context) ? $context["getTabsUrl"] : (function () { throw new RuntimeError('Variable "getTabsUrl" does not exist.', 139, $this->source); })())]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permission profile", [], "Admin.Advparameters.Feature")]], 136, $context, $this->getSourceContext());
            // line 143
            echo "

            ";
            // line 145
            if (twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "shop_association", [], "any", true, true, false, 145)) {
                // line 146
                echo "              ";
                echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 146, $this->source); })()), "shop_association", [], "any", false, false, false, 146), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop association", [], "Admin.Global"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select the shops the employee is allowed to access.", [], "Admin.Advparameters.Help")]], 146, $context, $this->getSourceContext());
                // line 149
                echo "
            ";
            }
            // line 151
            echo "          ";
        }
        // line 152
        echo "
          ";
        // line 153
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 153, $this->source); })()), "default_page", [], "any", false, false, false, 153), ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Default page", [], "Admin.Advparameters.Feature"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This page will be displayed right after signing in.", [], "Admin.Advparameters.Help")]], 153, $context, $this->getSourceContext());
        // line 156
        echo "

          ";
        // line 158
        $this->displayBlock('employee_form_rest', $context, $blocks);
        // line 161
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_index");
        echo "\" class=\"btn btn-outline-secondary\" id=\"cancel-link\">
          ";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\" id=\"save-button\">
          ";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 172
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 172, $this->source); })()), 'form_end');
        echo "

  ";
        // line 174
        $this->loadTemplate("@PrestaShop/Admin/Helpers/password_feedback.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", 174)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_employee_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_form_rest"));

        // line 159
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["employeeForm"]) || array_key_exists("employeeForm", $context) ? $context["employeeForm"] : (function () { throw new RuntimeError('Variable "employeeForm" does not exist.', 159, $this->source); })()), 'rest');
        echo "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 159,  301 => 158,  291 => 174,  286 => 172,  279 => 168,  273 => 165,  269 => 164,  264 => 161,  262 => 158,  258 => 156,  256 => 153,  253 => 152,  250 => 151,  246 => 149,  243 => 146,  241 => 145,  237 => 143,  235 => 139,  234 => 138,  233 => 136,  229 => 134,  226 => 131,  224 => 130,  220 => 128,  218 => 126,  215 => 125,  211 => 123,  209 => 122,  207 => 120,  199 => 114,  197 => 109,  193 => 107,  190 => 103,  188 => 102,  181 => 97,  176 => 95,  173 => 94,  169 => 91,  166 => 88,  161 => 84,  158 => 79,  152 => 75,  147 => 72,  144 => 71,  141 => 70,  138 => 69,  136 => 68,  133 => 67,  131 => 66,  127 => 64,  125 => 62,  121 => 60,  119 => 58,  112 => 54,  105 => 49,  103 => 47,  99 => 45,  97 => 43,  93 => 41,  91 => 39,  86 => 37,  79 => 33,  72 => 30,  53 => 29,  50 => 28,  48 => 26,  45 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}
{% trans_default_domain 'Admin.Advparameters.Feature' %}

{% block employee_form %}
  {{ form_start(employeeForm) }}
    <div class=\"card\">
      <h3 class=\"card-header\">
        {{ 'Employees'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {{ form_errors(employeeForm) }}

          {{ ps.form_group_row(employeeForm.firstname, {}, {
            'label': 'First name'|trans({}, 'Admin.Global')
            }) }}

          {{ ps.form_group_row(employeeForm.lastname, {}, {
            'label': 'Last name'|trans({}, 'Admin.Global')
            }) }}

          {{ ps.form_group_row(employeeForm.avatarUrl, {}, {
            'label': 'Avatar'|trans({}, 'Admin.Global')
            }) }}

          <div class=\"form-group row\">
            <label class=\"form-control-label\"></label>
            <div class=\"col-sm\">
              <img class=\"img-thumbnail clickable-avatar\" src=\"{{ avatarUrl }}\" alt=\"\">
            </div>
          </div>

          {{ ps.form_group_row(employeeForm.has_enabled_gravatar, {}, {
            'label': 'Enable gravatar'|trans({}, 'Admin.Global')
            }) }}

          {{ ps.form_group_row(employeeForm.email, {}, {
            'label': 'Email address'|trans({}, 'Admin.Global')
            }) }}

          {% set passwordHelpMessage = 'Password should be at least %num% characters long.'|trans({ '%num%': ('PS_SECURITY_PASSWORD_POLICY_MINIMUM_LENGTH'|configuration|intCast) }, 'Admin.Advparameters.Help') %}

          {% if isRestrictedAccess %}
            {% set oldPasswordVars = employeeForm.change_password.old_password.vars|merge(old_password|default({})) %}
            {% set newPasswordFirstVars = employeeForm.change_password.new_password.children.first.vars|merge(new_password.first_options|default({})) %}
            {% set newPasswordSecondVars = employeeForm.change_password.new_password.children.second.vars|merge(new_password.second_options|default({})) %}

            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                {{ 'Password'|trans({}, 'Admin.Global') }}
              </label>
              <div class=\"col-sm\">
                {# \"Change password\" button #}
                {{ form_widget(employeeForm.change_password.change_password_button, {
                  label: 'Change password...'|trans({}, 'messages'),
                  attr: {
                    class: 'btn-outline-secondary js-change-password',
                  }
                  }) }}

                <div class=\"card card-body js-change-password-block d-none\">
                  {# Current password input #}
                  {{ ps.form_group_row(employeeForm.change_password.old_password, oldPasswordVars, {
                    label: 'Current password'|trans({}, 'messages'),
                    required: true,
                    }) }}

                  {# New password first input #}
                  <div class=\"form-group row\">
                    {{ ps.label_with_help('New password'|trans({}, 'messages'), passwordHelpMessage, '', employeeForm.change_password.new_password.children.first.vars.id, true) }}
                    <div class=\"col-sm\">
                      {{ ps.form_widget_with_error(employeeForm.change_password.new_password.children.first, employeeForm.change_password.new_password.children.first.vars) }}
                    </div>
                  </div>

                  {# New password second input (confirmation) #}
                  {# Empty help text needed to render the text container for validation feedback messages #}
                  {{ ps.form_group_row(employeeForm.change_password.new_password.children.second, newPasswordSecondVars, {
                    label: 'Confirm password'|trans({}, 'messages'),
                    help: '',
                    required: true,
                    }) }}

                  {{ ps.form_group_row(employeeForm.change_password.cancel_button, {
                    label: 'Cancel'|trans({}, 'Admin.Actions'),
                    attr: {
                      class: 'btn-outline-secondary js-change-password-cancel',
                    }
                    }) }}

                </div>
              </div>
            </div>
          {% else %}
            {{ ps.form_group_row(employeeForm.password, {}, {
              'label': 'Password'|trans({}, 'Admin.Global'),
              'help': passwordHelpMessage,
              }) }}
          {% endif %}

          {{ ps.form_group_row(employeeForm.language, {}, {
            'label': 'Language'|trans({}, 'Admin.Global')
            }) }}

          {% if not isRestrictedAccess %}
            {{ ps.form_group_row(employeeForm.active, {}, {
              'label': 'Active'|trans({}, 'Admin.Global'),
              'help': 'Allow or disallow this employee to log in to the Admin panel.'|trans({}, 'Admin.Advparameters.Help')
              }) }}

            {{ ps.form_group_row(employeeForm.profile, {
              'attr': {
                'data-admin-profile': superAdminProfileId,
                'data-get-tabs-url': getTabsUrl,
              }
              }, {
                'label': 'Permission profile'|trans({}, 'Admin.Advparameters.Feature')
              }) }}

            {% if employeeForm.shop_association is defined %}
              {{ ps.form_group_row(employeeForm.shop_association, {}, {
                'label': 'Shop association'|trans({}, 'Admin.Global'),
                'help': 'Select the shops the employee is allowed to access.'|trans({}, 'Admin.Advparameters.Help')
                }) }}
            {% endif %}
          {% endif %}

          {{ ps.form_group_row(employeeForm.default_page, {'attr': {'data-minimumResultsForSearch': '7', 'data-toggle': 'select2'}}, {
            'label': 'Default page'|trans,
            'help': 'This page will be displayed right after signing in.'|trans({}, 'Admin.Advparameters.Help')
            }) }}

          {% block employee_form_rest %}
            {{ form_rest(employeeForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <a href=\"{{ path('admin_employees_index') }}\" class=\"btn btn-outline-secondary\" id=\"cancel-link\">
          {{ 'Cancel'|trans({}, 'Admin.Actions') }}
        </a>
        <button class=\"btn btn-primary float-right\" id=\"save-button\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    </div>
  {{ form_end(employeeForm) }}

  {% include '@PrestaShop/Admin/Helpers/password_feedback.html.twig' %}
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Employee\\Blocks\\form.html.twig");
    }
}
