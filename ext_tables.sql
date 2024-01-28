-- main theme
-- 1:1 relation to theme_sectionstyles
-- 1:1 relation to theme_fonts
-- 1:n relation to theme_buttonstyles
CREATE TABLE tx_themecreator_domain_model_theme (
  title varchar(255) DEFAULT '' NOT NULL,
  description text DEFAULT '' NOT NULL,
  buttonstyles int(11) DEFAULT '0' NOT NULL,
  sectionstyles int(11) DEFAULT '0' NOT NULL,
  fonts int(11) DEFAULT '0' NOT NULL,
);

-- Bootstrap 5 section styles
-- 1:n spacings to define padding/margin/gap
CREATE TABLE tx_themecreator_domain_model_theme_sectionstyles (
  theme int(11) DEFAULT '0' NOT NULL,
  container varchar(16) DEFAULT 'container' NOT NULL,
  spacings int(11) DEFAULT '0' NOT NULL,
);

-- Bootrap 5 styles for buttons
-- btn, btn-primary, btn-secondary
CREATE TABLE tx_themecreator_domain_model_theme_buttonstyles (
  theme int(11) DEFAULT '0' NOT NULL,
  class_name varchar(255) DEFAULT '' NOT NULL,
  background_color varchar(7) DEFAULT '0' NOT NULL,
  color varchar(7) DEFAULT '0' NOT NULL,
  hover_background_color varchar(7) DEFAULT '0' NOT NULL,
  hover_color varchar(7) DEFAULT '0' NOT NULL,
  border_color varchar(7) DEFAULT '0' NOT NULL,
  hover_border_color varchar(7) DEFAULT '0' NOT NULL,
);

-- define multiple spacings
-- select from padding/margin/gap
CREATE TABLE tx_themecreator_domain_model_theme_spacing (
  type varchar(10) DEFAULT '' NOT NULL,
  top int(11) DEFAULT '0' NOT NULL,
  right int(11) DEFAULT '0' NOT NULL,
  bottom int(11) DEFAULT '0' NOT NULL,
  left int(11) DEFAULT '0' NOT NULL,
  horizontal int(11) DEFAULT '0' NOT NULL,
  vertical int(11) DEFAULT '0' NOT NULL,

  sectionstyles int(11) DEFAULT '0' NOT NULL,
);

-- fontstyles
CREATE TABLE tx_themecreator_domain_model_theme_fonts (
  theme int(11) DEFAULT '0' NOT NULL,
  sans_serif varchar(255) DEFAULT '' NOT NULL,
  monospace varchar(255) DEFAULT '' NOT NULL,
  size varchar(11) DEFAULT '0' NOT NULL,
  weight varchar(11) DEFAULT '0' NOT NULL,
  color varchar(7) DEFAULT '0' NOT NULL,
  background_color varchar(7) DEFAULT '0' NOT NULL,
  link_color varchar(7) DEFAULT '0' NOT NULL,
  hover_color varchar(7) DEFAULT '0' NOT NULL,
);
