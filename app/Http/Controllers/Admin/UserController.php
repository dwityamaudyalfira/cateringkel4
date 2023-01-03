<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

    public function updaterole(Request $request,$id)
    {
        $user=User::find($id);


        $role=$request->input('role');
        $user->role = $role;


        $user->update();
        return redirect()->back()->with('status', 'Profile Berhasil Diperbarui');

    }
    public function deleteuser(Request $request,$id)
    {
        $user=User::find($id);

        $user->status = 2;
        //Status 0 is Hide user
        //Status 1 is active user
        // Status 2 is the user present in the recycle bin
        $user->update();
        return redirect()->back()->with('status', 'User dipindahkan menuju Recycle Bin');

    }
    public function restore(Request $request,$id)
    {
        $user=User::find($id);

        $user->status = 1;

       //Status 0 is Hide user
        //Status 1 is active user
        // Status 2 is the user present in the recycle bin
        $user->update();
        return redirect()->back()->with('status', 'Pengguna Berhasil Dipulihkan');

    }

    public function confirmdelete(Request $request,$id)
    {
       $delete = User::find($id);
       $delete->delete();
       return redirect()->back()->with('status','User Permanently Deleted  Successfully !!');
    }

}
