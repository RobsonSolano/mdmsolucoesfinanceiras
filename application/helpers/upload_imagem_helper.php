<?php

if (!function_exists('upload_imagem')) {

    /**
     * @param $campos_FILES
     * @param null $imagem_antiga
     * @param null $path_upload_file
     * @return mixed|null
     * @throws Exception
     */
    function upload_imagem($campos_FILES, $path_file_upload = NULL, $imagem_antiga = NULL)
    {
        $ci = &get_instance();

        if (isset($_FILES[$campos_FILES . '_avatar_file'])) {

            /** Cropper */
            $cropper_avatar_file = $_FILES[$campos_FILES . '_avatar_file'];
            $cropper_avatar_data = $ci->input->post($campos_FILES . '_avatar_data');

            if (!empty($cropper_avatar_file['name']) && !empty($cropper_avatar_data)) {

                $ci->load->library('image_lib');
                $ci->load->library('upload');

                /**
                 * CROP
                 */

                $crop_data = json_decode($cropper_avatar_data, true);
                $config_crop = array(
                    'source_image' => $cropper_avatar_file['tmp_name'],
                    'maintain_ratio' => FALSE,
                    'rotation_angle' => $crop_data['rotate'],
                    'width' => (int)$crop_data['width'],
                    'height' => (int)$crop_data['height'],
                    'x_axis' => $crop_data['x'],
                    'y_axis' => $crop_data['y']
                );

                $ci->image_lib->clear();
                $ci->image_lib->initialize($config_crop);

                if (!$ci->image_lib->crop()) {
                    throw new Exception($ci->image_lib->display_errors());
                }

                unset($config_crop);

                $campos_FILES = $campos_FILES . '_avatar_file';

                /**
                 * END CROP
                 */
            }
        }

        // var_dump($campos_FILES, $path_file_upload, $imagem_antiga);
        if (empty($_FILES[$campos_FILES]['name'])) {
            return $imagem_antiga;
        }

        /**
         * Faz o UPLOAD
         */
        $upload_config['upload_path'] = FCPATH . $path_file_upload;
        $upload_config['allowed_types'] = 'gif|jpg|png|jpeg';
        $upload_config['encrypt_name'] = true;
        $upload_config['overwrite'] = false;

        $ci->load->library('upload');

        $ci->upload->initialize($upload_config);

        if (!$ci->upload->do_upload($campos_FILES)) {
            throw new Exception($ci->upload->display_errors());
        }

        $upload_data = $ci->upload->data();

        /**
         * Remove a imagem antiga
         */
        if (!empty($imagem_antiga)) {
            if (file_exists($path_file_upload . $imagem_antiga)) {
                unlink($path_file_upload . $imagem_antiga);
            }
        }

        /**
         * Faz o Resize se necessário
         */
        $file_name = $upload_data['file_name'];

        list($width, $height) = getimagesize(FCPATH . $path_file_upload . $file_name);

        // Se a imagem for menor que 1000x1000 não precisa fazer o resize


        $config['source_image'] = FCPATH . $path_file_upload . $file_name;
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 369;
        $config['height'] = 234;

        $ci->load->library('image_lib');

        $ci->image_lib->initialize($config);

        if (!$ci->image_lib->resize()) {
            throw new Exception($ci->image_lib->display_errors());
        }

        // Retorna o nome do arquivo
        return $file_name;
    }
}
