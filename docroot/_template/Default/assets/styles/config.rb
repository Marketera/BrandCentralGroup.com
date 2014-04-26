gem 'compass', '=0.12.6'
gem 'oily_png', '=1.1.1'
gem 'sass', '=3.2.19'

# Set this to the root of your project when deployed:
http_path = "/_template/Default/assets/styles/"
css_dir = "generated"
sass_dir = "scss"
images_dir = "../images"
javascripts_dir = "../scripts"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false

preferred_syntax = :scss