<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UploadController extends Controller
{
    public function index()
    {
        $disk = Storage::disk('files');
        $files = $disk->allFiles();

        return view('files.index', [
            'files' => $files,
        ]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);

        $disk = Storage::disk('files');

        $files = $request->file('file');
        foreach ($files as $file) {
            $disk->putFileAs('', $file, time().'_'.$file->getClientOriginalName());
        }

        return redirect('upload');
    }

    public function delete(Request $request)
    {
        $disk = Storage::disk('files');
        $disk->delete($request->filename);
        return redirect('upload');
    }
}
