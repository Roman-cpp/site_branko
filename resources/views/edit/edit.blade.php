@extends('include.template_edit')

<x-include.edit-menu/>
<x-include.edit-table :action="$name_resources" :columns="$columns" :model="$model"/>
