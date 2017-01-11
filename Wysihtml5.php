<?php
namespace xz1mefx\widgets\wysihtml5;

use yii\bootstrap\Html;
use yii\bootstrap\InputWidget;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

/**
 * Class Wysihtml5
 * @package xz1mefx\widgets\wysihtml5
 */
class Wysihtml5 extends InputWidget
{

    public $widgetToolbar;

    /**
     * @inheritdoc
     */
    public function run()
    {
        Wysihtml5Asset::register($this->view);

        $settings = Json::encode([
            'toolbar' => ArrayHelper::merge([
                "fa" => FALSE, // Use FA icons
                "font-styles" => TRUE, // Font styling, e.g. h1, h2, etc. Default true
                "emphasis" => TRUE, // Italics, bold, etc. Default true
                "lists" => TRUE, // (Un)ordered lists, e.g. Bullets, Numbers. Default true
                "html" => FALSE, // Button which allows you to edit the generated HTML. Default false
                "link" => TRUE, // Button to insert a link. Default true
                "image" => FALSE, // Button to insert an image. Default true,
                "color" => FALSE, // Button to change color of font
                "blockquote" => TRUE, // Blockquote
                "size" => NULL // default=> none, other options are xs, sm, lg
            ], $this->widgetToolbar),
        ]);

        $this->view->registerJs("$('#" . $this->options['id'] . "').wysihtml5($settings);");

        if ($this->hasModel()) {
            return Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            return Html::textarea($this->name, $this->value, $this->options);
        }
    }

}
