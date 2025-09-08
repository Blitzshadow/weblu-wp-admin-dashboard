# Available Hooks and Filters in Weblu WP Admin Dashboard

The "Weblu WP Admin Dashboard" plugin provides a set of hooks and filters that allow developers to extend and customize the functionality of the dashboard. Below is a list of available hooks and filters along with their descriptions.

## Action Hooks

1. **weblu_dashboard_init**
   - **Description**: Fires when the dashboard is initialized.
   - **Usage**: `do_action('weblu_dashboard_init');`

2. **weblu_dashboard_render**
   - **Description**: Fires before rendering the dashboard page.
   - **Usage**: `do_action('weblu_dashboard_render');`

3. **weblu_module_loaded**
   - **Description**: Fires when a module is successfully loaded.
   - **Parameters**: 
     - `$module_name` (string) - The name of the loaded module.
   - **Usage**: `do_action('weblu_module_loaded', $module_name);`

4. **weblu_before_module_render**
   - **Description**: Fires before a specific module is rendered.
   - **Parameters**: 
     - `$module_name` (string) - The name of the module being rendered.
   - **Usage**: `do_action('weblu_before_module_render', $module_name);`

5. **weblu_after_module_render**
   - **Description**: Fires after a specific module has been rendered.
   - **Parameters**: 
     - `$module_name` (string) - The name of the module that was rendered.
   - **Usage**: `do_action('weblu_after_module_render', $module_name);`

## Filters

1. **weblu_dashboard_title**
   - **Description**: Filter the title of the dashboard.
   - **Parameters**: 
     - `$title` (string) - The current title of the dashboard.
   - **Usage**: 
     ```php
     $title = apply_filters('weblu_dashboard_title', $title);
     ```

2. **weblu_module_content**
   - **Description**: Filter the content of a specific module.
   - **Parameters**: 
     - `$content` (string) - The current content of the module.
     - `$module_name` (string) - The name of the module.
   - **Usage**: 
     ```php
     $content = apply_filters('weblu_module_content', $content, $module_name);
     ```

3. **weblu_dashboard_styles**
   - **Description**: Filter the styles loaded in the dashboard.
   - **Parameters**: 
     - `$styles` (array) - An array of stylesheets.
   - **Usage**: 
     ```php
     $styles = apply_filters('weblu_dashboard_styles', $styles);
     ```

4. **weblu_dashboard_scripts**
   - **Description**: Filter the scripts loaded in the dashboard.
   - **Parameters**: 
     - `$scripts` (array) - An array of JavaScript files.
   - **Usage**: 
     ```php
     $scripts = apply_filters('weblu_dashboard_scripts', $scripts);
     ```

## Conclusion

These hooks and filters provide a flexible way to customize the "Weblu WP Admin Dashboard" plugin. Developers can use these to add new features, modify existing functionality, or integrate with other plugins and themes.