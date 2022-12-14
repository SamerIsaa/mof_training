<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\ImageRepository;
use Illuminate\Support\Facades\File;
use App\Model\Image;

class ImageController extends Controller
{
    protected $image;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->image = $imageRepository;
    }


    public function upload_image(Request $request) {
//        dd('ggg');
        $photo = $request->all();
        $response = $this->image->upload($photo, 'image');
        return $response;
    }

//    public function deleteMedia(Request $request) {
//        $media = Media::where('file_name',$request->file_name);
//        if (!isset($media)){
//            return Response::json([
//                'status' => false,
//            ], 200);
//        }
//        $media->delete();
//        return Response::json([
//            'status' => true,
//        ], 200);
//    }

    public function delete_image(Request $request) {
        $filename = $request->id;
        if(!$filename)
        {
            return 0;
        }
        $response = $this->image->delete( $filename );

        return $response;
    }

    public function deleteUploadUser() {

        $filename = request('id');

        if(!$filename)
        {
            return 0;
        }

        $response = $this->image->deleteUser( $filename );

        return $response;
    }

    /**
     * Part 2 - Display already uploaded images in Dropzone
     */


    public function getServerImages() {
        $images = Image::select('id', 'title', 'filename', 'display')->where('status', 0)->latest('id')->get();

        $imageAnswer = [];

        foreach ($images as $image) {
            $path = storage_path('app/uploads/images/'.$image->filename);
            $imageAnswer[] = [
                'img_id' => $image->id,
                'name' => $image->filename,
                'filename' => $image->filename,
                'title' => $image->title,
                'display' => $image->display,
                'size' => File::size($path)
            ];
        }

        return response()->json([
            'images' => $imageAnswer
        ]);
    }


}
