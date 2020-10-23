<?php
namespace Text;

use Text\Format;

function upper($value)
{
    return Format::upperText($value);
}

function lower($value)
{
    return Format::lowerText($value);
}
