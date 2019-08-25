package com.example.project;

import static org.junit.jupiter.api.Assertions.assertEquals;

import com.example.project.*;
import org.junit.jupiter.api.Test;

class TesteOne {
	

    private final Calculator calculador = new Calculator();

	@Test
   
    void adicao() {
        assertEquals(2, calculador.adicao(1, 1));
    }
	
	@Test
	
	void sub() {
		assertEquals(0, calculador.sub(2, 2));
	}
	
	@Test
	
	void mult() {
		assertEquals(10, calculador.mult(5, 2));
	}
	
	@Test
	
	void div() {
		assertEquals(20, calculador.div(40, 2));
		assertEquals(2, calculador.div(100,50));
	}
	
	@Test
	
	void poten() {
		assertEquals(4, calculador.poten(2,2));
	}
	
	@Test
	
	void raiz() {
		assertEquals(7, calculador.raiz(49));
	}
}
	
    