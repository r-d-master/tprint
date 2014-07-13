require 'bootstrap-sass'
# Require any additional compass plugins here.

# Default to development if environment is not set.
saved = environment
if (environment.nil?)
  environment = :production
else
  environment = saved
end

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "javascripts"

# You can select your preferred output style here (can be overridden via the command line):
output_style = (environment == :production) ? :expanded : :nested

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = (environment == :production) ? false : true


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass

# Output debugging info in development mode.
sass_options = (environment == :production) ? {} : {:debug_info => false}
