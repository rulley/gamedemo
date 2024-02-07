<?php

namespace Kendo\UI;

class GridColumnMenuColumns extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The sort order which will be applied over the columns list. By default, the columns menu items are in the same order as the columns in the grid.The supported values are: "asc" (ascending order) or "desc" (descending order).
    * @param string $value
    * @return \Kendo\UI\GridColumnMenuColumns
    */
    public function sort($value) {
        return $this->setProperty('sort', $value);
    }

//<< Properties
}

?>
