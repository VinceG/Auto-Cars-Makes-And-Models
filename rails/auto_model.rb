class AutoModel < ActiveRecord::Base
  belongs_to :auto_make
  attr_accessible :auto_make_id, :code, :title
end
