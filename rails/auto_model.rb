class AutoModel < ActiveRecord::Base
  belongs_to :auto_make
  attr_accessible :auto_makes_id, :code, :title
end
