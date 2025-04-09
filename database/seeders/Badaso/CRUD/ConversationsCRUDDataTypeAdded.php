<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class ConversationsCRUDDataTypeAdded extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();

        try {

            $data_type = Badaso::model('DataType')->where('name', 'conversations')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'conversations')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 4,
                'name' => 'conversations',
                'slug' => 'conversations',
                'display_name_singular' => 'Conversations',
                'display_name_plural' => 'Conversations',
                'icon' => 'forum',
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'is_maintenance' => 0,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => false,
                'created_at' => '2024-05-30 04:34:48',
                'updated_at' => '2024-05-30 04:34:48',
            ));

            Badaso::model('Permission')->generateFor('conversations');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/conversations')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Conversations',
                    'target' => '_self',
                    'icon_class' => 'forum',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_conversations',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/conversations';
                $menu_item->title = 'Conversations';
                $menu_item->target = '_self';
                $menu_item->icon_class = 'forum';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_conversations';
                $menu_item->order = $order;
                $menu_item->save();
            }

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

           throw new Exception('Exception occur ' . $e);
        }
    }
}
