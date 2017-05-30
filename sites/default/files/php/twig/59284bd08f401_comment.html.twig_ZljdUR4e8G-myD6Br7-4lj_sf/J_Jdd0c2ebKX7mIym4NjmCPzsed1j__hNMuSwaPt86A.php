<?php

/* themes/mayo/templates/comment.html.twig */
class __TwigTemplate_4020147e88470fe8064846dfbdfbc8948a2b1e11e5bc19dd1e471663bb8c0efb extends Twig_Template
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
        $tags = array("if" => 86);
        $filters = array("without" => 65);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 65
        echo "<article class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array()), "html", null, true));
        echo " clearfix\" role=\"article\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["attributes"]) ? $context["attributes"] : null), "class", "role"), "html", null, true));
        echo ">

  <header class=\"comment-header\">
    <div class=\"attribution\">
      ";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["user_picture"]) ? $context["user_picture"] : null), "html", null, true));
        echo "

      <div class=\"submitted\">
        <p class=\"commenter-name\">
          ";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true));
        echo "
        </p>
        <p class=\"comment-time\">
          ";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "
        </p>
        <p class=\"comment-permalink\">
          ";
        // line 79
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["permalink"]) ? $context["permalink"] : null), "html", null, true));
        echo "
        </p>
        ";
        // line 86
        echo "        ";
        if ((isset($context["parent"]) ? $context["parent"] : null)) {
            // line 87
            echo "        <p class=\"comment-parent visually-hidden\">
          ";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["parent"]) ? $context["parent"] : null), "html", null, true));
            echo "
        </p>
        ";
        }
        // line 91
        echo "      </div>
    </div> <!-- /.attribution -->
  </header> <!-- /.comment-header -->

  <div class=\"comment-text\">
    <div class=\"comment-arrow\"></div>

    ";
        // line 103
        echo "    <span class=\"hidden new\" data-comment-timestamp=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["new_indicator_timestamp"]) ? $context["new_indicator_timestamp"] : null), "html", null, true));
        echo "\"></span>

    ";
        // line 105
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 106
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
      <h3";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
      ";
            // line 108
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
    ";
        }
        // line 110
        echo "
    <div";
        // line 111
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
      ";
        // line 112
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "links"), "html", null, true));
        echo "
    </div> <!-- /.content -->

    <footer class=\"comment-footer\">
      ";
        // line 116
        if ((isset($context["signature"]) ? $context["signature"] : null)) {
            // line 117
            echo "      <div class=\"user-signature clearfix\">
        ";
            // line 118
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["signature"]) ? $context["signature"] : null), "html", null, true));
            echo "
      </div>
      ";
        }
        // line 121
        echo "
        ";
        // line 122
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array())) {
            // line 123
            echo "          <nav>
            ";
            // line 124
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true));
            echo "
          </nav>
        ";
        }
        // line 127
        echo "    </footer> <!-- /.comment-footer -->
  </div> <!-- /.comment-text -->

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/mayo/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 127,  155 => 124,  152 => 123,  150 => 122,  147 => 121,  141 => 118,  138 => 117,  136 => 116,  129 => 112,  125 => 111,  122 => 110,  117 => 108,  111 => 107,  106 => 106,  104 => 105,  98 => 103,  89 => 91,  83 => 88,  80 => 87,  77 => 86,  72 => 79,  66 => 76,  60 => 73,  53 => 69,  43 => 65,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Mayo's theme implementation for comments. (Mostly from Bartik)
 *
 * Available variables:
 * - author: Comment author. Can be a link or plain text.
 * - content: The content-related items for the comment display. Use
 *   {{ content }} to print them all, or print a subset such as
 *   {{ content.field_example }}. Use the following code to temporarily suppress
 *   the printing of a given child element:
 *   @code
 *   {{ content|without('field_example') }}
 *   @endcode
 * - created: Formatted date and time for when the comment was created.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the 'comment.created' variable.
 * - changed: Formatted date and time for when the comment was last changed.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the 'comment.changed' variable.
 * - permalink: Comment permalink.
 * - submitted: Submission information created from author and created
 *   during template_preprocess_comment().
 * - user_picture: The comment author's profile picture.
 * - signature: The comment author's signature.
 * - status: Comment status. Possible values are:
 *   unpublished, published, or preview.
 * - title: Comment title, linked to the comment.
 * - attributes.class: List of classes that can be used to style contextually
 *   through CSS. The default values can be one or more of the following:
 *   - comment: The current template type; e.g., 'theming hook'.
 *   - by-anonymous: Comment by an unregistered user.
 *   - by-{entity-type}-author: Comment by the author of the parent entity,
 *     eg. by-node-author.
 *   - preview: When previewing a new or edited comment.
 *   The following applies only to viewers who are registered users:
 *   - unpublished: An unpublished comment visible only to administrators.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - content_attributes: List of classes for the styling of the comment content.
 *
 * These variables are provided to give context about the parent comment (if
 * any):
 * - comment_parent: Full parent comment entity (if any).
 * - parent_author: Equivalent to author for the parent comment.
 * - parent_created: Equivalent to created for the parent comment.
 * - parent_changed: Equivalent to changed for the parent comment.
 * - parent_title: Equivalent to title for the parent comment.
 * - parent_permalink: Equivalent to permalink for the parent comment.
 * - parent: A text string of parent comment submission information created from
 *   'parent_author' and 'parent_created' during template_preprocess_comment().
 *   This information is presented to help screen readers follow lengthy
 *   discussion threads. You can hide this from sighted users using the class
 *   visually-hidden.
 *
 * These two variables are provided for context:
 * - comment: Full comment object.
 * - entity: Entity the comments are attached to.
 *
 * @see template_preprocess_comment()
 */
#}
<article class=\"{{ attributes.class }} clearfix\" role=\"article\"{{ attributes|without('class', 'role') }}>

  <header class=\"comment-header\">
    <div class=\"attribution\">
      {{ user_picture }}

      <div class=\"submitted\">
        <p class=\"commenter-name\">
          {{ author }}
        </p>
        <p class=\"comment-time\">
          {{ created }}
        </p>
        <p class=\"comment-permalink\">
          {{ permalink }}
        </p>
        {#
          // Indicate the semantic relationship between parent and child comments
          // for accessibility. The list is difficult to navigate in a screen
          // reader without this information.
        #}
        {% if parent %}
        <p class=\"comment-parent visually-hidden\">
          {{ parent }}
        </p>
        {% endif %}
      </div>
    </div> <!-- /.attribution -->
  </header> <!-- /.comment-header -->

  <div class=\"comment-text\">
    <div class=\"comment-arrow\"></div>

    {#
    Hide the \"new\" indicator by default, let a piece of JavaScript ask
    the server which comments are new for the user. Rendering the final
    \"new\" indicator here would break the render cache.
    #}
    <span class=\"hidden new\" data-comment-timestamp=\"{{ new_indicator_timestamp }}\"></span>

    {% if title %}
      {{ title_prefix }}
      <h3{{ title_attributes }}>{{ title }}</h3>
      {{ title_suffix }}
    {% endif %}

    <div{{ content_attributes }}>
      {{ content|without('links') }}
    </div> <!-- /.content -->

    <footer class=\"comment-footer\">
      {% if signature %}
      <div class=\"user-signature clearfix\">
        {{ signature }}
      </div>
      {% endif %}

        {% if content.links %}
          <nav>
            {{ content.links }}
          </nav>
        {% endif %}
    </footer> <!-- /.comment-footer -->
  </div> <!-- /.comment-text -->

</article>
";
    }
}
