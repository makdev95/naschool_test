public function getSong(Song $song) {
    $file = new File(storage_path()."/songs/".$song->path.".mp3");

    $headers = array();
    $headers['Content-Type'] = 'audio/mpeg, audio/x-mpeg, audio/x-mpeg-3, audio/mpeg3';
    $headers['Content-Length'] = $file->getSize();
    $headers['Content-Transfer-Encoding'] = 'binary';
    $headers['Accept-Range'] = 'bytes';
    $headers['Cache-Control'] = 'must-revalidate, post-check=0, pre-check=0';
    $headers['Connection'] = 'Keep-Alive';
    $headers['Content-Disposition'] = 'attachment; filename="'.$song->path.'.mp3"';

    $user = \Auth::user();
    if($user->activated_at) {
        return Response::download($file, $song->path, $headers);
    }
    \App::abort(400);
}