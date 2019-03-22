<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 22.03.19
 * Time: 20:25
 */

class Form
{
    /**
     * @var array
     */
    private $fields;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $action;

    public function __construct(string $method, string $action)
    {
        $this->method = $method;
        $this->action = $action;
        $this->fields = [];
    }

    public function render()
    {
        $html = sprintf('<form method="%s" action="%s">', $this->method,$this->action);
        $html .= '</form>';

        return $html;

    }
}