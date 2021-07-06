<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class DuplicateAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Duplicate Page';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
        ];
    }

    public function getDefaultRoute()
    {
    	// URL for action button when click
        return route('pages_clone', array("id"=>$this->data->{$this->data->getKeyName()}));
       // return route('my.route');
    }
    /*public function shouldActionDisplayOnDataType()
	{
    	return $this->dataType->slug == 'Pages';
	}*/
}