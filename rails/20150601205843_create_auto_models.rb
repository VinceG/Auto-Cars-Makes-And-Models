class CreateAutoModels < ActiveRecord::Migration
  def change
    create_table :auto_models do |t|
      t.string :code
      t.string :title
      t.references :auto_makes
      t.timestamps
    end
    add_index :auto_models, :auto_makes_id
  end
end