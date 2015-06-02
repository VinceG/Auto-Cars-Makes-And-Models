class CreateAutoModels < ActiveRecord::Migration
  def change
    create_table :auto_models do |t|
      t.string :code
      t.string :title
      t.references :auto_make
      t.timestamps
    end
    add_index :auto_models, :auto_make_id
  end
end