<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Validator;
use Carbon\Carbon;

class BannerController extends Controller
{
    public function banner_list(){
        $bannr_list = Banner::all();
        return view('backend.banner.index', compact('bannr_list'));
    }

    public function banner_add(Request $request){
        dd($request->all());

        $todayFormatted = Carbon::today()->format('Y-m-d');

        $validator = Validator::make($request->all(), [
            'startdate' => 'nullable|date|after_or_equal:' . $todayFormatted,
            'enddate' => 'nullable|date|after_or_equal:startdate',
            'bannerimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $banner = new Banner();
        $banner->start_date = $request->input('startdate');
        $banner->end_date = $request->input('enddate');
        if($banner->save()){
            if ($request->hasFile('bannerimage')) {
                $image = $request->file('bannerimage');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/banners'), $imageName);
                $banner->image = 'images/banners/' . $imageName;
                if($banner->update()){
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Banner added successfully!',
                    ], 200);
                }else{
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Banner not added successfully!',
                    ], 422);
                }
            }
        }else{
            return response()->json([
                'status' => 'success',
                'message' => 'Banner not added successfully!',
            ], 422);
        }
    }

}
