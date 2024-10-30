<?php
namespace kumihimo;

/**
 * Returns a set of default values that are sufficient for indexing wordpress if the user does not set any values.
 * ユーザーが値を設定しない場合、wordpressを索引付けするのに十分なデフォルト値のセットを戻す。
 **/
class Defaults
{
	/**
	 * Useful field names that wordpress provides out the box
	 * wordpressが提供する便利なフィールド名
	 * @return string[] field names
	 **/
	static function fields()
	{
		return array('post_content', 'post_title', 'post_type');
	}

	/**
	 * Returns any post types currently defined in wordpress
	 * wordpressで現在定義されている投稿タイプを返します。
	 * @return string[] post type names
	 **/
	static function types()
	{
		$types = get_post_types();

		$available = array();

		foreach ($types as $type) {
			$tobject = get_post_type_object($type);

			if (!$tobject->exclude_from_search && $type != 'attachment') {
				$available[] = $type;
			}
		}

		return $available;
	}

	/**
	 * Returns any taxonomies registered for the provided post types
	 *
	 * @return string[] taxonomy slugs
	 **/
	static function taxonomies($types)
	{
		$taxes = array();

		foreach ($types as $type) {
			$taxes = array_merge($taxes, get_object_taxonomies($type));
		}

		return array_unique($taxes);
	}

	/**
	 * Returns all customfields registered for any post type.
	 * Copied method meta_form() from admin/includes/templates.php as inline method ... damn those dirty wordpress suckers!!!
	 * @return string[] meta keys sorted
	 **/
	static function meta_fields()
	{

		global $wpdb;
		$keys = $wpdb->get_col("SELECT meta_key
                            FROM $wpdb->postmeta
                            GROUP BY meta_key
                            HAVING meta_key NOT LIKE '\_%'
                            ORDER BY meta_key");
		if ($keys) {
			natcasesort($keys);
		} else {
			$keys = array();
		}
		return $keys;
	}
}

?>
