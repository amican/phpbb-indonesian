<?php
/**
*
* This file is part of the American English Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Disini kamu bisa konfigurasi halaman settings untuk lampiran dan rekan kategori spesial.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Disini kamu bisa menambah, menghapus, memodifikasi atau menonaktifkan grup ekstensi. Pilihan lebih lanjut termasuk penugasan kategori khusus untuk mereka, mengubah mekanisme unduhan dan menentukan ikon unggah yang akan ditampilkan di depan lampiran yang menjadi milik grup.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Disini kamu bisa mengelola ekstensi yang diizinkan. untuk mengaktifkan ekstensi, lihat panel manajemen grup ekstensi. Sangat tidak disarankan mengizinkan ekstensi scripting (seperti <code> php </code>, <code> php3 </code>, <code> php4 </code>, <code> phtml </code>, <code> pl </code>, <code> cgi </code>, <code> py </code>, <code> rb </code>, <code> asp </code>, <code> aspx </code> , Dan seterusnya…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Here you are able to see orphaned files. This happens mostly if users are attaching files but not submitting the post. You are able to delete the files or attach them to existing posts. Attaching to posts requires a valid post ID, you have to determine this ID by yourself. This will assign the already uploaded attachment to the post you entered.',
	'ADD_EXTENSION'						=> 'Tambah ekstensi',
	'ADD_EXTENSION_GROUP'				=> 'Tambah grup ekstensi',
	'ADMIN_UPLOAD_ERROR'				=> 'Error Saat melampirkan file: “%s”.',
	'ALLOWED_FORUMS'					=> 'Izinkan Untuk Forum',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Mampu memposting ekstensi yang ditempatkan di forum yang dipilih (atau semua jika dipilih).',
	'ALLOWED_IN_PM_POST'				=> 'Izinkan',
	'ALLOW_ATTACHMENTS'					=> 'Izinkan lampiran',
	'ALLOW_ALL_FORUMS'					=> 'Izinkan untuk semua forum',
	'ALLOW_IN_PM'						=> 'Izinkan untuk pesan pribadi',
	'ALLOW_PM_ATTACHMENTS'				=> 'Izinkan lampiran di pesan pribadi',
	'ALLOW_SELECTED_FORUMS'				=> 'Hanya forum terpilih dibawah',
	'ASSIGNED_EXTENSIONS'				=> 'Ekstensi yang ditempatkan',
	'ASSIGNED_GROUP'					=> 'Ekstensi yang ditempakan di grup',
	'ATTACH_EXTENSIONS_URL'				=> 'Ekstensi',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grup Ekstensi',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Ukuran berkas maksimal',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Ukuran maskimal tiap berkas. jika nilainya 0, maka akan mengikuti ukuran berkas standar PHP.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Ukuran maksimal berkas di pesan',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Ukuran maksimal tiap berkas, nilai 0 tak terbatas, dilampirkan di pesan pribadi.',
	'ATTACH_ORPHAN_URL'					=> 'Lampiran tak terkait',
	'ATTACH_POST_ID'					=> 'ID Pos',
	'ATTACH_POST_TYPE'					=> 'Tipe Pos',
	'ATTACH_QUOTA'						=> 'Total Kuota lampiran',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maksimal ruang penyimpanan untuk for lampiran untuk semua dewan, angak 0 nilai tak terbatas.',
	'ATTACH_TO_POST'					=> 'Lampirkan file di pos',

	'CAT_IMAGES'				=> 'Gambar',
	'CHECK_CONTENT'				=> 'Cek lampiran pos',
	'CHECK_CONTENT_EXPLAIN'		=> 'Beberapa peramban dapat membuat trik yang dianggap salah menentukan tipe berkas untuk saat mengunggah berkas. Opsi ini memastikan jika berkas-berkas tersebut mungkin akan ditolak.',
	'CREATE_GROUP'				=> 'Buat grup baru',
	'CREATE_THUMBNAIL'			=> 'Buat thumbnail',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Buat thumbnail untuk semua kemungkinan.',

	'DEFINE_ALLOWED_IPS'			=> 'Tetapkan alamat IP yang diizinkan',
	'DEFINE_DISALLOWED_IPS'			=> 'Tetapkan alamat IP yang tidak diizinkan',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'To specify several different IPs or hostnames enter each on a new line. To specify a range of IP addresses separate the start and end with a hyphen (-), to specify a wildcard use “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'You can remove (or un-exclude) multiple IP addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser. Excluded IPs have a blue background.',
	'DISPLAY_INLINED'				=> 'Display images inline',
	'DISPLAY_INLINED_EXPLAIN'		=> 'If set to No image attachments will show as a link.',
	'DISPLAY_ORDER'					=> 'Attachment display order',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Display attachments ordered by time.',

	'EDIT_EXTENSION_GROUP'			=> 'Edit extension group',
	'EXCLUDE_ENTERED_IP'			=> 'Enable this to exclude the entered IP/hostname.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Exclude IP from allowed IPs/hostnames',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Exclude IP from disallowed IPs/hostnames',
	'EXTENSIONS_UPDATED'			=> 'Extensions successfully updated.',
	'EXTENSION_EXIST'				=> 'The extension %s already exists.',
	'EXTENSION_GROUP'				=> 'Extension group',
	'EXTENSION_GROUPS'				=> 'Extension groups',
	'EXTENSION_GROUP_DELETED'		=> 'Extension group successfully deleted.',
	'EXTENSION_GROUP_EXIST'			=> 'The extension group %s already exists.',

	'EXT_GROUP_ARCHIVES'			=> 'Archives',
	'EXT_GROUP_DOCUMENTS'			=> 'Documents',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadable Files',
	'EXT_GROUP_IMAGES'				=> 'Images',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Plain Text',

	'FILES_GONE'			=> 'Some of the attachments you selected for deletion do not exist. They may have been already deleted. Attachments that did exist were deleted.',
	'FILES_STATS_WRONG'		=> 'Your file statistics are likely inaccurate and need to be resynchronized. Actual values: number of attachments = %1$d, total size of attachments = %2$s.<br />Click %3$shere%4$s to resynchronize them.',

	'GO_TO_EXTENSIONS'		=> 'Go to extension management screen',
	'GROUP_NAME'			=> 'Group name',

	'IMAGE_LINK_SIZE'			=> 'Image link dimensions',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Display image attachment as an inline text link if image is larger than this. To disable this behavior, set the values to 0px by 0px.',

	'MAX_ATTACHMENTS'				=> 'Maximum number of attachments per post',
	'MAX_ATTACHMENTS_PM'			=> 'Maximum number of attachments per private message',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximum file size',
	'MAX_IMAGE_SIZE'				=> 'Maximum image dimensions',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximum size of image attachments. Set both values to 0px by 0px to disable dimension checking.',
	'MAX_THUMB_WIDTH'				=> 'Maximum thumbnail width/height in pixel',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'A generated thumbnail will not exceed the width/height set here.',
	'MIN_THUMB_FILESIZE'			=> 'Minimum thumbnail file size',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Do not create a thumbnail for images smaller than this.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'Only allowed in posts',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Not allowed',
	'NOT_ASSIGNED'				=> 'Not assigned',
	'NO_ATTACHMENTS'			=> 'No attachments found for this period.',
	'NO_EXT_GROUP'				=> 'None',
	'NO_EXT_GROUP_NAME'			=> 'No group name entered',
	'NO_EXT_GROUP_SPECIFIED'	=> 'No extension group specified.',
	'NO_FILE_CAT'				=> 'None',
	'NO_IMAGE'					=> 'No image',
	'NO_UPLOAD_DIR'				=> 'The upload directory you specified does not exist.',
	'NO_WRITE_UPLOAD'			=> 'The upload directory you specified cannot be written to. Please alter the permissions to allow the webserver to write to it.',

	'ONLY_ALLOWED_IN_PM'	=> 'Only allowed in private messages',
	'ORDER_ALLOW_DENY'		=> 'Allow',
	'ORDER_DENY_ALLOW'		=> 'Deny',

	'REMOVE_ALLOWED_IPS'			=> 'Remove or un-exclude <em>allowed</em> IPs/hostnames',
	'REMOVE_DISALLOWED_IPS'			=> 'Remove or un-exclude <em>disallowed</em> IPs/hostnames',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Are you sure you wish to resynchronize file statistics?',

	'SECURE_ALLOW_DENY'				=> 'Allow/Deny list',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Change the default behavior when secure downloads are enabled of the Allow/Deny list to that of a <strong>whitelist</strong> (Allow) or a <strong>blacklist</strong> (Deny).',
	'SECURE_DOWNLOADS'				=> 'Enable secure downloads',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'With this option enabled, downloads are limited to IP’s/hostnames you define.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Secure Downloads are not enabled. The settings below will be applied after enabling secure downloads.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'The IP list has been updated successfully.',
	'SECURE_EMPTY_REFERRER'			=> 'Allow empty referrer',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Secure downloads are based on referrers. Do you want to allow downloads for those omitting the referrer?',
	'SETTINGS_CAT_IMAGES'			=> 'Image category settings',
	'SPECIAL_CATEGORY'				=> 'Special category',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Special categories differ between the way presented within posts.',
	'SUCCESSFULLY_UPLOADED'			=> 'Successfully uploaded.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Extension group successfully added.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Extension group successfully updated.',

	'UPLOADING_FILES'				=> 'Uploading files',
	'UPLOADING_FILE_TO'				=> 'Uploading file “%1$s” to post number %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'You do not have the permission to upload files to forum “%s”.',
	'UPLOAD_DIR'					=> 'Upload directory',
	'UPLOAD_DIR_EXPLAIN'			=> 'Storage path for attachments. Please note that if you change this directory while already having uploaded attachments you need to manually copy the files to their new location.',
	'UPLOAD_ICON'					=> 'Upload icon',
	'UPLOAD_NOT_DIR'				=> 'The upload location you specified does not appear to be a directory.',
));
