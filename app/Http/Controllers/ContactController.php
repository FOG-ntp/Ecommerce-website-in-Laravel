<?php

namespace App\Http\Controllers;

use App\Models\CatePost;
use App\Models\Contact;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/* use App\Icons; */
use Illuminate\Support\Facades\Redirect;
use Toastr;
session_start();
class ContactController extends Controller
{

    /* public function add_doitac(Request $request)
    {
        $data = $request->all();
        $icons = new Icons();
        $name = $data['name'];
        $link = $data['link'];
        $get_image = $request->file('file');

        $path = 'public/uploads/icons/';

        //them hinh anh
        if ($get_image) {

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $icons->image = $new_image;

        }
        $icons->name = $name;
        $icons->link = $link;
        $icons->category = 'doitac';

        $icons->save();

    }
    public function add_nut(Request $request)
    {
        $data = $request->all();
        $icons = new Icons();
        $name = $data['name'];
        $link = $data['link'];
        $get_image = $request->file('file');

        $path = 'public/uploads/icons/';

        //them hinh anh
        if ($get_image) {

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $icons->image = $new_image;

        }
        $icons->name = $name;
        $icons->link = $link;
        $icons->category = 'icons';

        $icons->save();

    }
    public function delete_icons()
    {
        $id = $_GET['id'];
        $icons = Icons::find($id);
        $icons->delete();
    }

    public function list_doitac()
    {
        $icons = Icons::where('category', 'doitac')->orderBy('id_icons', 'DESC')->get();
        // dd($icons);
        $output = '';
        $output .= '<table class="table table-hover">
            <thead>
              <tr>
                <th>T??n ?????i t??c</th>
                <th>H??nh ???nh ?????i t??c</th>
                <th>Link ?????i t??c</th>
                <th>Qu???n l??</th>
              </tr>
              </tr>
            </thead>
            <tbody>';
        foreach ($icons as $ico) {

            $output .= ' <tr>
                <td>' . $ico->name . '</td>
                <td><img height="80px" width="150px" src="' . url('/public/uploads/icons/' . $ico->image) . '"></td>
                <td>' . $ico->link . '</td>
                 <td><button id="' . $ico->id_icons . '" class="btn btn-warning" onclick="delete_icons(this.id)">X??a ?????i t??c</button></td>
              </tr>';

        }
        $output .= '</tbody>
          </table>';
        echo $output;
    }
    public function list_nut()
    {
        $icons = Icons::where('category', 'icons')->orderBy('id_icons', 'DESC')->get();
        // dd($icons);
        $output = '';
        $output .= '<table class="table table-hover">
            <thead>
              <tr>
                <th>T??n n??t</th>
                <th>H??nh ???nh</th>
                <th>Link</th>
                <th>Qu???n l??</th>
              </tr>
              </tr>
            </thead>
            <tbody>';
        foreach ($icons as $ico) {

            $output .= ' <tr>
                <td>' . $ico->name . '</td>
                <td><img height="32px" width="32px" src="' . url('/public/uploads/icons/' . $ico->image) . '"></td>
                <td>' . $ico->link . '</td>
                 <td><button id="' . $ico->id_icons . '" class="btn btn-danger" onclick="delete_icons(this.id)">X??a</button></td>
              </tr>';

        }
        $output .= '</tbody>
          </table>';
        echo $output;
    } */
    public function lien_he(Request $request)
    {
        //category post
        $category_post = CatePost::orderBy('cate_post_id', 'DESC')->get();

        //slide
        $slider = Slider::orderBy('slider_id', 'DESC')->where('slider_status', '1')->take(4)->get();
        //seo
        $meta_desc = "Li??n h???";
        $meta_keywords = "Li??n h???";
        $meta_title = "Li??n h??? ch??ng t??i";
        $url_canonical = $request->url();
        //--seo

        $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        $contact = Contact::where('info_id', 1)->get();

        return view('pages.lienhe.contact')->with('category', $cate_product)->with('brand', $brand_product)->with('meta_desc', $meta_desc)->with('meta_keywords', $meta_keywords)->with('meta_title', $meta_title)->with('url_canonical', $url_canonical)->with('slider', $slider)->with('category_post', $category_post)->with('contact', $contact);

    }
    public function information()
    {
        $contact = Contact::where('info_id', 1)->get();

        return view('admin.information.add_information')->with(compact('contact'));
    }
    public function update_info(Request $request, $info_id)
    {
        $data = $request->all();
        $contact = Contact::find($info_id);
        $contact->info_contact = $data['info_contact'];
        
        $contact->info_map = $data['info_map'];
        $contact->info_fanpage = $data['info_fanpage'];
        $get_image = $request->file('info_image');
        

        $contact->save();
        Toastr::info('Thao t??c th??nh c??ng', 'C???p nh???t th??ng tin!',);
        return redirect()->back()->with('message', 'C???p nh???t th??ng tin website th??nh c??ng');
    }
    public function save_info(Request $request)
    {
        $data = $request->all();
        $contact = new Contact();
        $contact->info_contact = $data['info_contact'];
        $contact->info_map = $data['info_map'];
        $contact->info_fanpage = $data['info_fanpage'];
        

        $contact->save();
        return redirect()->back()->with('message', 'C???p nh???t th??ng tin website th??nh c??ng');

    }
}
