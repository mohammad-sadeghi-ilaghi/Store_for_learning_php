<?php
namespace Utilities {
    class Result
    {
        public $content;
        public bool $status;
        function __construct($content, bool $status)
        {
            $this->content = $content;
            $this->$status = $status;
        }
    }
}
?>