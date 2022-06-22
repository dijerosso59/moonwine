<label class="age-gate-label" for="age-gate-d">
    <?php echo ($this->messages->labels->day) ? esc_html(strip_tags($this->messages->labels->day)) : __('Day', 'age-gate'); ?>
</label>
<input type="text" name="age_gate[d]" id="age-gate-d" class="age-gate-input" value="<?php echo(isset($age['d']) ? esc_html($age['d']) : '') ?>"  tabindex="1" placeholder="<?php _e('DD', 'age-gate'); ?>" required minlength="1" maxlength="2" pattern="[0-9]*" inputmode="numeric" autocomplete="off"<?php echo(isset($age['atts']['d']) ? esc_html($age['atts']['d']) : '') ?>>
