<?php
/**
 * Get Mailjet Template for Language
 *
 * @author Jay Trees <github.jay@grandel.anonaddy.me>
 */

/**
 * Get Template ID
 *
 * @return int
 */
function gjmj4wp_get_template_id(): int {
	$template_id;

	foreach ( get_active_languages() as $language ) {
		if ( ICL_LANGUAGE_CODE === $language['code'] ) {
			$template_id = get_option( GJMJ4WP_MAILJET_TEMPLATE_ID_CONFIRMATION . '-' . $language['code'] );
			break;
		}
	}

	return $template_id;
}