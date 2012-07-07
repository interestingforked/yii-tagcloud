<?php

/**
 * @author Troy <troytft@gmail.com>
 */
class TagCloud extends CWidget
{

    public $limit = 20;

    public function run()
    {
        $tags = Tag::model()->findTagWeights($this->limit);
        foreach ($tags as $tag => $weight)
            echo CHtml::tag('span', array('style' => "font-size:{$weight}pt"), $tag);
    }


}
