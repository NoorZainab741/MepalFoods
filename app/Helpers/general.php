<?php

function _getAllCategories()
{
    $categories = \App\Category::all();
    return $categories;
}

function _getCategoryName($id)
{
    $category = \App\Category::where('id',$id)->get()->first();
    return $category;
}
