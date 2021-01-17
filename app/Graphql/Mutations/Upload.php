<?php

namespace App\GraphQL\Mutations;

class Upload
{
    /**
     * Upload a file, store it on the server and return the path.
     *
     * @param  mixed  $root
     * @param  array<string, mixed>  $args
     * @return string|null
     */
    public function __invoke($root, array $args): ?string
    {
        /** @var \Illuminate\Http\UploadedFile $file */
        $file = $args['file'];

        return $file->storePublicly('uploads');
    }
}

// mutation {
//    upload(file: Upload!): String
// }

// // 
// curl 127.0.0.1:8000 \
//    -F operations='{ "query": "mutation ($file: Upload!) { upload(file: $file) }", "variables": { "file": null } }' \
//    -F map='{ "0": ["variables.file"] }' \
//    -F 0=@my_file.txt