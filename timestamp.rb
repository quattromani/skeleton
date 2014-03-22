module Sass::Script::Functions
    def timestamp()
        return Sass::Script::String.new(Time.now.asctime)
    end
end