<?php


namespace Fnematov\TrendyolParser;


trait Fillable
{
    /**
     * Fill object attributes
     *
     * @param array $attributes
     * @return self
     */
    public function fill(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key))
                $this->$key = $value;
        }
        return $this;
    }
}
