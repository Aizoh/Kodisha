<?php

namespace App\Http\Controllers;

use App\Property;
use App\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function get_owner($id){

        $property = Property::find($id);
        $owner = $property->user_id;

        if($owner){
            return $owner;
        }else{
            return null;
        }
        
    }
    public static function role_title($id){

        $role=Role::join('assigned_roles','assigned_roles.role_id','=','roles.id')
                   ->where('assigned_roles.entity_id','=',$id)
                   ->first();


        if(!is_null($role))return $role->title; else return "";
     

    }

    public static function has_ability($ability){

        if(Bouncer::cannot($ability)){    
           Session::flash('alert-danger', 'You are not allowed');
           abort(403);           
        }       

    }

    public static function role_abilities($id){

        return Role::select('abilities.name','abilities.entity_type')
                ->join('permissions','permissions.entity_id','=','roles.id')
                ->join('abilities','abilities.id','=','permissions.ability_id')
                ->where('roles.id','=',$id)
                ->get();

    }

    public static function can_model($model,$action,$space){


        $abilities=self::role_abilities($space->id);
  
        $checked="";
  
        foreach ($abilities as $ability) {
  
          /*if($ability->entity_type=="App\\".$model && ($ability->name==$action || $ability->name=="*" )){
            $checked="checked";
          }*/
  
  
         if($ability->name==$action.'_'.$model){
            $checked="checked";
          }
  
  
        }
         return $checked;      
  
      }
}
