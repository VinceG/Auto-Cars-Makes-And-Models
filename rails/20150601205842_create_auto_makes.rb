class CreateAutoMakes < ActiveRecord::Migration
  def change
    create_table :auto_makes do |t|
      t.string :code
      t.string :title
      t.timestamps
    end
  end
end
