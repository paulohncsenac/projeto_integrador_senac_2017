-- MySQL Script generated by MySQL Workbench
-- 11/28/17 09:48:14
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ColdBeer
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ColdBeer
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ColdBeer` DEFAULT CHARACTER SET utf8 ;
USE `ColdBeer` ;

-- -----------------------------------------------------
-- Table `ColdBeer`.`Fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ColdBeer`.`Fornecedor` (
  `IdFornecedor` INT NOT NULL,
  `CNPJ` BIGINT(14) NOT NULL,
  `NomeEmpresa` VARCHAR(45) NOT NULL,
  `NomeFantasya` VARCHAR(45) NOT NULL,
  `EmailForn` VARCHAR(50) NOT NULL,
  `Referencia` VARCHAR(45) NOT NULL,
  `ListaProcon` TINYINT(1) NOT NULL,
  `NomeResponsavel` VARCHAR(45) NOT NULL,
  `CelResponsavel` INT NOT NULL,
  `TelForn1` INT NOT NULL,
  `TelForn2` INT NOT NULL,
  `AvaliacaoFornecedor` TEXT(200) NOT NULL,
  `Endereco` VARCHAR(80) NOT NULL,
  `Cep` INT NOT NULL,
  `Bairro` VARCHAR(80) NOT NULL,
  `Cidade` VARCHAR(80) NOT NULL,
  `Estado` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`IdFornecedor`, `CNPJ`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ColdBeer`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ColdBeer`.`Cliente` (
  `IdCli` INT NOT NULL,
  `EmailCli` VARCHAR(80) NOT NULL,
  `NomeCli` VARCHAR(30) NOT NULL,
  `SobreNome` VARCHAR(30) NOT NULL,
  `DtNascCli` DATE NOT NULL,
  `SenhaCli` VARCHAR(50) NOT NULL,
  `NumeroEndCli` VARCHAR(45) NOT NULL,
  `RuaEndCli` VARCHAR(100) NOT NULL,
  `CepEndCli` INT NOT NULL,
  `BairroEndCli` VARCHAR(80) NOT NULL,
  `CidadeCli` VARCHAR(80) NOT NULL,
  `EstadoCli` VARCHAR(16) NOT NULL,
  `CelCli` INT NOT NULL,
  `TelCli` INT NOT NULL,
  PRIMARY KEY (`IdCli`, `EmailCli`),
  UNIQUE INDEX `EmailCli_UNIQUE` (`EmailCli` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ColdBeer`.`Venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ColdBeer`.`Venda` (
  `IdVenda` BIGINT(16) NOT NULL,
  `CodProduto` INT NOT NULL,
  `Quantidade` INT NOT NULL,
  `TipoEnvio` CHAR(7) NOT NULL,
  `QuantasVezes` INT NOT NULL,
  `ValorParcela` FLOAT NOT NULL,
  `ValorTotal` FLOAT NOT NULL,
  `DataCompra` DATE NOT NULL,
  `DataEntrega` DATE NOT NULL,
  `Recebimento` TINYINT(1) NOT NULL,
  `NumeroConta` BIGINT(20) NOT NULL,
  `NumeroCartao` BIGINT(20) NOT NULL,
  `Cliente_IdCli` INT NOT NULL,
  `Cliente_EmailCli` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`IdVenda`, `Cliente_IdCli`, `Cliente_EmailCli`),
  INDEX `fk_Venda_Cliente1_idx` (`Cliente_IdCli` ASC, `Cliente_EmailCli` ASC),
  CONSTRAINT `fk_Venda_Cliente1`
    FOREIGN KEY (`Cliente_IdCli` , `Cliente_EmailCli`)
    REFERENCES `ColdBeer`.`Cliente` (`IdCli` , `EmailCli`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ColdBeer`.`EstoqueProd`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ColdBeer`.`EstoqueProd` (
  `CodigoProd` INT NOT NULL,
  `NomeProd` VARCHAR(45) NOT NULL,
  `Console` CHAR(3) NULL,
  `Quantidade` INT NOT NULL,
  PRIMARY KEY (`CodigoProd`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ColdBeer`.`Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ColdBeer`.`Produto` (
  `IdProd` BIGINT(20) NOT NULL,
  `NomeProd` VARCHAR(30) NOT NULL,
  `MarcaProd` VARCHAR(20) NOT NULL,
  `PrecoUnitario` FLOAT NOT NULL,
  `Promocao` VARCHAR(45) NULL,
  `Categoria` VARCHAR(20) NOT NULL,
  `Estoque` INT NOT NULL,
  `imagens` VARCHAR(100) NOT NULL,
  `EstoqueProd_CodigoProd` INT NOT NULL,
  `Fornecedor_IdFornecedor` INT NOT NULL,
  `Fornecedor_CNPJ` BIGINT(14) NOT NULL,
  PRIMARY KEY (`IdProd`, `EstoqueProd_CodigoProd`, `Fornecedor_IdFornecedor`, `Fornecedor_CNPJ`),
  UNIQUE INDEX `IdProd_UNIQUE` (`IdProd` ASC),
  UNIQUE INDEX `imagens_UNIQUE` (`imagens` ASC),
  INDEX `fk_Produto_EstoqueProd1_idx` (`EstoqueProd_CodigoProd` ASC),
  INDEX `fk_Produto_Fornecedor1_idx` (`Fornecedor_IdFornecedor` ASC, `Fornecedor_CNPJ` ASC),
  CONSTRAINT `fk_Produto_EstoqueProd1`
    FOREIGN KEY (`EstoqueProd_CodigoProd`)
    REFERENCES `ColdBeer`.`EstoqueProd` (`CodigoProd`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produto_Fornecedor1`
    FOREIGN KEY (`Fornecedor_IdFornecedor` , `Fornecedor_CNPJ`)
    REFERENCES `ColdBeer`.`Fornecedor` (`IdFornecedor` , `CNPJ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ColdBeer`.`Compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ColdBeer`.`Compra` (
  `IdCompra` BIGINT(30) NOT NULL,
  `CodProduto` INT NOT NULL,
  `Quantidade` INT NOT NULL,
  `ValorUnitario` FLOAT NOT NULL,
  `ValorTotal` FLOAT NOT NULL,
  `DataCompra` DATE NOT NULL,
  `DataEntrega` DATE NOT NULL,
  `Recebimento` TINYINT(1) NOT NULL,
  `Fornecedor_IdFornecedor` INT NOT NULL,
  `Fornecedor_CNPJ` BIGINT(14) NOT NULL,
  PRIMARY KEY (`IdCompra`, `Fornecedor_IdFornecedor`, `Fornecedor_CNPJ`),
  INDEX `fk_Compra_Fornecedor1_idx` (`Fornecedor_IdFornecedor` ASC, `Fornecedor_CNPJ` ASC),
  CONSTRAINT `fk_Compra_Fornecedor1`
    FOREIGN KEY (`Fornecedor_IdFornecedor` , `Fornecedor_CNPJ`)
    REFERENCES `ColdBeer`.`Fornecedor` (`IdFornecedor` , `CNPJ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ColdBeer`.`PedidoV`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ColdBeer`.`PedidoV` (
  `IdPedidoV` INT NOT NULL,
  `DataPedido` DATE NOT NULL,
  `ValorPedido` FLOAT NOT NULL,
  `StatusPedido` VARCHAR(10) NOT NULL,
  `ObsPedido` VARCHAR(50) NULL,
  `EnderecoPV` VARCHAR(100) NOT NULL,
  `CepPV` INT NOT NULL,
  `CidadePV` VARCHAR(80) NOT NULL,
  `EstadoPV` VARCHAR(80) NOT NULL,
  `DTPrenPV` DATE NOT NULL,
  `Cliente_IdCli` INT NOT NULL,
  `Cliente_EmailCli` VARCHAR(80) NOT NULL,
  `Produto_IdProd` BIGINT(20) NOT NULL,
  `Produto_EstoqueProd_CodigoProd` INT NOT NULL,
  `Produto_Fornecedor_IdFornecedor` INT NOT NULL,
  `Produto_Fornecedor_CNPJ` BIGINT(14) NOT NULL,
  PRIMARY KEY (`IdPedidoV`, `Cliente_IdCli`, `Cliente_EmailCli`, `Produto_IdProd`, `Produto_EstoqueProd_CodigoProd`, `Produto_Fornecedor_IdFornecedor`, `Produto_Fornecedor_CNPJ`),
  INDEX `fk_PedidoV_Cliente1_idx` (`Cliente_IdCli` ASC, `Cliente_EmailCli` ASC),
  INDEX `fk_PedidoV_Produto1_idx` (`Produto_IdProd` ASC, `Produto_EstoqueProd_CodigoProd` ASC, `Produto_Fornecedor_IdFornecedor` ASC, `Produto_Fornecedor_CNPJ` ASC),
  CONSTRAINT `fk_PedidoV_Cliente1`
    FOREIGN KEY (`Cliente_IdCli` , `Cliente_EmailCli`)
    REFERENCES `ColdBeer`.`Cliente` (`IdCli` , `EmailCli`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PedidoV_Produto1`
    FOREIGN KEY (`Produto_IdProd` , `Produto_EstoqueProd_CodigoProd` , `Produto_Fornecedor_IdFornecedor` , `Produto_Fornecedor_CNPJ`)
    REFERENCES `ColdBeer`.`Produto` (`IdProd` , `EstoqueProd_CodigoProd` , `Fornecedor_IdFornecedor` , `Fornecedor_CNPJ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ColdBeer`.`PedidoC`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ColdBeer`.`PedidoC` (
  `IdPedidoC` INT NOT NULL,
  `DataPedido` DATE NOT NULL,
  `ValorPedido` FLOAT NOT NULL,
  `Status` VARCHAR(20) NOT NULL,
  `ObsPedido` VARCHAR(30) NULL,
  `EnderecoPC` VARCHAR(100) NOT NULL,
  `CepPC` INT NOT NULL,
  `CidadePC` VARCHAR(80) NOT NULL,
  `EstadoPC` VARCHAR(80) NOT NULL,
  `DTPrenPC` DATE NOT NULL,
  `Fornecedor_IdFornecedor` INT NOT NULL,
  `Fornecedor_CNPJ` BIGINT(14) NOT NULL,
  PRIMARY KEY (`IdPedidoC`, `Fornecedor_IdFornecedor`, `Fornecedor_CNPJ`),
  INDEX `fk_PedidoC_Fornecedor1_idx` (`Fornecedor_IdFornecedor` ASC, `Fornecedor_CNPJ` ASC),
  CONSTRAINT `fk_PedidoC_Fornecedor1`
    FOREIGN KEY (`Fornecedor_IdFornecedor` , `Fornecedor_CNPJ`)
    REFERENCES `ColdBeer`.`Fornecedor` (`IdFornecedor` , `CNPJ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;