<tr>
	<td><label><?php esc_html_e( 'Alignment', 'formidable-pro' ) ?></label></td>
    <td>
        <select name="field_options[align_<?php echo absint( $field['id'] ) ?>]">
			<option value="block" <?php selected( $field['align'], 'block' ); ?>>
				<?php esc_html_e( 'Multiple Rows', 'formidable-pro' ); ?>
			</option>
			<option value="inline" <?php selected( $field['align'], 'inline' ); ?>>
				<?php esc_html_e( 'Single Row', 'formidable-pro' ); ?>
			</option>
        </select>
    </td>
</tr>
