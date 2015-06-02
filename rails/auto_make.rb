class AutoMake < ActiveRecord::Base
  attr_accessible :code, :title
  has_many :auto_models
end
